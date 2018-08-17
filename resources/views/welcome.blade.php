<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .table-container {
                width: 800px;
                margin: 30px;
            }

            .table-container > table {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="flex-left position-ref full-height">
            <div class="table-container">
                <a href="{{ route('contacts.create') }}">Add New</a>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Action</th>
                </tr>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->country }}</td>
                    <td>{{ $contact->city }}</td>
                    <td>{{ $contact->state }}</td>
                    <td>{{ $contact->zip }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', [$contact->id]) }}">Edit</a>
                        <form method="POST" onsubmit="return confirm('You sure?')" action="{{ route('contacts.destroy', $contact->id) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" />
                        </form>
                        </td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </body>
</html>
