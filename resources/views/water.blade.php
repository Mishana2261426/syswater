<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            div {
            	margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Water
                </div>
                <div>
                	<form action="/water" method="POST" >
                		<div>
                			<input type="text" class="form-control" name="article" placeholder="Артикл" required>
                		</div>
                		<div>
                			<input type="text" class="form-control" name="category" placeholder="Категория" required>
                		</div>
                		<div>
                			<input type="text" class="form-control" name="volume" placeholder="Объём" required>
                		</div>
                		<div>
                			<input type="text" class="form-control" name="name" placeholder="Название" required>
                		</div>
                		<div>
                			<input type="text" class="form-control" name="producer" placeholder="Производитель" required>
                		</div>
                		<div>
                			<input type="text" class="form-control" name="image" required>
                		</div>
                		<div>
                			<input type="text" class="form-control" name="price" placeholder="Цена" required>
                		</div>
                		<div>
                			<input type="submit" value="Добавить" class="btn btn-primary">
                		</div>
                	</form>
                </div>

            </div>
        </div>
    </body>
</html>
