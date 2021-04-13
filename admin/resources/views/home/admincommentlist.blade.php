<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Comment</title>
</head>
<body>
    @include('home.navbar');

    <h1>View All Comment</h1>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a> |

    <a href="/home/admincommentcreate">Insert new comment</a> |

    <br>

    <table border="1">
        <tr>
            <td> ID</td>
            <td>comment</td>
            <td>Action</td>

        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['id'] }}</td>
            <td>
                <textarea name="massage" id="" cols="150" rows="5">{{ $list[$i]['massage'] }}</textarea>

            </td>



            <td>
                <a href="/home/admincommentedit/{{ $list[$i]['id'] }}">Edit</a> |
                <a href="/home/admincommentdelete/{{ $list[$i]['id'] }}">Delete</a> |
                <a href="/home/admincommentedit/{{ $list[$i]['id'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</body>
</html>
