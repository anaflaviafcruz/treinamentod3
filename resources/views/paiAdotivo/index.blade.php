<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Treinamento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index.html" class="text-success">
                                                <span><img src="{{asset('assets/images/Capturar.png')}}" alt="" height="50"></span>
                                            </a>
                                        </h2>
                                        <h6 class="text-uppercase text-center font-bold mt-4">Treinamento Dia 3</h6>
                                    </div>
                                    <div class="account-content">
                                        <form class="form-horizontal" action="{{ route('paiAdotivo.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="username">Nome</label>
                                                    <input class="form-control" type="text" name="name" required="" placeholder="Michael Zenaty">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email</label>
                                                    <input class="form-control" type="email" name="email" required="" placeholder="john@deo.com">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Endereço</label>
                                                    <input class="form-control" type="text" required="" name="address" placeholder="Enter your password">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">CPF</label>
                                                    <input class="form-control" type="text" required="" name="cpf" id="cpf" placeholder="Enter your password">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Telefone</label>
                                                    <input class="form-control" type="text" required="" name="phone" id="phone" placeholder="Enter your password">
                                                </div>
                                            </div>

                                        

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Cadastrar</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/jquery.inputmask.js"></script>
        <script>
            $("#phone").inputmask({
                mask: ['(99) 9 9999-9999'],
            });
            $("#cpf").inputmask({
                mask: ['999.999.999-99'],
            });
        </script>

    </body>
</html>