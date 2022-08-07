
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<table style='margin-left:5px'>   
    <tr style='background-color:#563d7c;color:white'>  
        <td style='width:200px'>ID</td>
        <td style='width:200px'>Name</td>
        <td style='width:600px'>Email</td>
        <td style='width:200px'>Action</td>
       
</tr>
@include('includes.navbar')
    @foreach($users as $user)
       <tr>
       <td> {{$user['id']}} </td>
       <td><a href="{{ route('users.show',$user['id']) }} "> {{$user['name']}}</a></td>
       <td>{{$user['email']}}</td>
       <td><table>
        <tr>
            <td style='width:80px'><form action=" {{ route('users.edit',$user['id']) }}" method='GET'>
         
            @csrf
              
             <!-- <input hidden value= " {{ $user['id'] }} " name='myid'>    -->
            <button type='submit' style='border:none;background-color:#563d7c80;border-radius:5px'>Edit</button></form></td>
            <td><form action=" {{ route('users.destroy',$user['id']) }}" method='POST'>
                @method('Delete')
            @csrf

                 <button type='submit' style='border:none;background-color:#563d7c;border-radius:5px;color:white'>Delete</button></form></td>
            
</tr>      
        </table>
       </td>
</tr>
    @endforeach
</table>
</body>
</html>