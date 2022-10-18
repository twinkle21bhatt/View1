<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container bg-light">
            <h2 style="text-align:center">List</h2>
            <div class="container"  style="width: 100%;">
                <table class="styled-table" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FIRST_Name </th>
                            <th>LAST_NAME</th>
                            <th>AGE</th>
                            <th>ADDRESS</th>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach ($user1s as $user1)

                                <tr>
                                    <td>{{ $user1->id }}</td>
                                    <td>{{$user1->first_name}}</td>
                                    <td>{{$user1->last_name}}</td>
                                    <td>{{$user1->age}}</td>
                                    <td>{{$user1->address}}</td>
                                 </tr>

                            @endforeach

                    </tbody>
                 </table>
             </div> 
        </div>
</body>
</html>