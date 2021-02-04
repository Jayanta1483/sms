<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <form action="" id="myForm" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Provide Mobile Number :</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Write Messages :</label>
                <textarea class="form-control" id="msg" name="msg" rows="3"></textarea></br>
                <button class="btn btn-primary" id="sub" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>



    <script>
    let form = document.getElementById('myForm');
    const btn = document.getElementById('sub');

    btn.addEventListener('click', (e)=>{
        e.preventDefault();
        console.log('submit')
        const formData = new FormData(form);
        let url = 'backend.php';
        let data = {
            method:'POST',
            body: formData
        }

        fetch(url,data).then(response=> response.text().then(text=>alert(text)));
        form.reset();
    })
    
    
    
    </script>

</body>

</html>