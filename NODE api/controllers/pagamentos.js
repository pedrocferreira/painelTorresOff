
module.exports = function (app) {
    app.get('/teste', function (req, res) {
        console.log('Recebida quequisisçao  de teste na porta 3000s');
        res.send('ok');

    });
    //PUT
    app.put('/pagamentos/pagamento/:id', function (req, res) {
        var pagamento = {};
        pagamento.id = id;
        var id = req.params.id;
        pagamento.status = 'CONDFIRMADO';
        var connection = app.persistencia.connectionFactory();
        let pagamentoDao = new app.persistencia.PagamentoDao(connection);

        pagamentoDao.atualiza(pagamento, function (erro) {
            if (erro) {
                res.status(500).send(erro);
            }
            res.send(pagamento);
            return;

        });



    })

    app.get('/pagamentos/pagamento',(req,res, next) => {
        var connection = app.persistencia.connectionFactory();
        let pagamentoDao = new app.persistencia.PagamentoDao(connection);

        connection.query('select * from pagamentos', (err, pagamentos)=>{
            res.json(pagamentos);

        })

        
    })
    ///DELETE
    app.delete('/pagamentos/pagamento/:id', function (req, res) {
        var pagamento = {};
        pagamento.id = id;
        var id = req.params.id;
        pagamento.status = 'CANCELADO';

        var connection = app.persistencia.connectionFactory();
        let pagamentoDao = new app.persistencia.PagamentoDao(connection);

        pagamentoDao.atualiza(pagamento, function (erro) {
            if (erro) {
                res.status(500).send(erro);
            }
            console.log("PAGAMNETO CANCELADO");
            res.send(pagamento);
            return;

        });


    })
    //POST
    app.post('/pagamentos/pagamento', function (req, res) {

        req.assert("forma_de_pagamento",
            "Forma de pagamento eh obrigatorio").notEmpty();
        req.assert("valor",
            "Valor obragtorios e tem que ser decimal")
            .notEmpty().isFloat();


        var erros = req.validationErrors();

        if (erros) {
            console.log("erros de validacao encontrado");
            res.status(500).send(error);
            return;
        }


        var pagamento = req.body;
        console.log('Processando uma requisição de novo pagamento')
        pagamento.status = 'CRIADO';
        pagamento.data = new Date;


        var connection = app.persistencia.connectionFactory();

        let pagamentoDao = new app.persistencia.PagamentoDao(connection);
        // SALVAR
        pagamentoDao.salva(pagamento, function (erro, result) {
            if (erro) {
                console.log("erro ao Insserir no banco");

                res.status(500).send(erro);

            } else {
                pagamento.id = result.insertId;
                console.log('pagamento criado: ' + result);
                res.location('/pagamentos/pagamento/' +
                    result.insertId);

                var response = {
                    dados_do_pagamento: pagamento,
                    links: [
                        {
                            href: "http://localhost:3000/pagamentos/pagamento/"
                                + pagamento.id,
                            rel: "confirmar",
                            method: "PUT"
                        },
                        {
                            href: "http://localhost:3000/pagamentos/pagamento/"
                                + pagamento.id,
                            rel: "cancelar",
                            method: "DELETE"
                        },

                    ]
                }
                res.status(201).json(response);
            }
        });


    });
}



