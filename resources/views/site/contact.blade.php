<!-- resources/views/site/contact.blade.php -->
@extends('layouts.app')

@section('title', 'Contact')


@section('contentQ')
<br>
<br> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SHOP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #E55807;
            color: white;
            padding: 10px 0;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
        }
        .footer {
            margin-top: 20px;
            padding: 10px;
            text-align: center;
            color: #777;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <p><strong>REQUETE</strong></p>
        </div>
        <div class="content">

            <form method="POST" action="{{ route('site.requete') }}">

                @csrf

                <div class="mb-3">
                    <label for="nom_complet" class="form-label">Nom complet</label>
                    <input type="text" required class="form-control" id="nom_complet" name="nom_complet">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="text" required class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" required class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="objet" class="form-label">Objet</label>
                    <input type="text" class="form-control" id="objet" name="objet">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea rows="5" id="message" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Soumettre</button>

            </form>

        </div>
        <div class="footer">
            <p class="mb-0">© 2024 * <a href="" target="_blank">SHOP 241</a> ® * By
                <a href="" target="_blank" style="color: #E55807;">AP3 - IAI.</a>.
            </p>
        </div>
    </div>
    @if (Session::get('success'))
                            <div class="alert alert-success alert-dismissible alert-alt solid fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                </button>
                                Succès : <strong>{{ ' ' . Session::get('success') }}</strong>
                            </div>
                        @endif

                        @if (Session::get('failed'))
                            <div class="alert alert-danger alert-dismissible alert-alt solid fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                </button>
                                Attention : <strong>{{ ' ' . Session::get('failed') }}</strong>
                            </div>
                        @endif

</body>
</html>
@endsection

