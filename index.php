
<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>

        <!--BOOTSTRAP LINK--> 
        <link rel="stylesheet" href="assets/bootstrap 4/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
        <section class="ajaxSearch">
            <div class="container">
                <div class="text-center">
                    <h3 class="text-muted">Ajax Search from DB</h3>
                </div>
                <nav class="navbar navbar-light bg-light d-flex justify-content-center">
                    <form class="form-inline d-flex">
                        <input 
                            class="form-control mx-3"
                            type="text"
                            id="searchInput"
                            placeholder="Name"
                            name="search_input"
                            >
                        <button class="btn btn-outline-success" name="search_Submit" id="btnSubmit" type="submit">Search</button>
                    </form>
                </nav>
                <div class="searchValue">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Catagory</th>
                                <th scope="col">Product</th>
                                <th scope="col">Seller Name</th>
                                <th scope="col">Seller Contact</th>
                            </tr>
                        </thead>
                        <tbody id="txtHint">
                            <?php
                            include_once 'database/collectSellerInfo.php';
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class = "join-table">
            <div class = "container">
                <div class="text-center">
                    <h3 class="text-muted">INNER, LEFT, RIGHT JOIN</h3>
                </div>
                <table class = "table table-hover text-white">
                    <thead class = "table-head bg-dark">
                        <tr>
                            <th scope="row">#</th>
                            <th>CatagoryId</th>
                            <th>ProductId</th>
                            <th>Price</th>
                            <th>Catagory Name</th>
                        </tr>
                    </thead>
                    <tbody class = "text-dark">
                        <?php
                        include_once 'database/catagoryName.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
<!--        <section class = "join-table">
            <div class = "container">
                <div class="text-center">
                    <h3 class="text-muted">QUANTITY</h3>
                </div>
                <table class = "table table-hover text-white">
                    <thead class = "table-head bg-dark">
                        <tr>
                            <th>Id</th>
                            <th>Catagory</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody class = "text-dark">
        <?php
//                        include_once 'database/quantity.php';
        ?>
                    </tbody>
                </table>
            </div>
        </section>-->
        <section class = "join-table">
            <div class = "container">
                <div class="text-center">
                    <h3 class="text-muted">Check Quantity Greater Than 6</h3>
                </div>
                <table class = "table table-hover text-white">
                    <thead class = "table-head bg-dark">
                        <tr>
                            <th>Id</th>
                            <th>Catagory</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody class = "text-dark">
                        <?php
                        include_once 'database/quantity.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <script>
            document.getElementById("btnSubmit").addEventListener("click", function (event) {
                event.preventDefault();
                const str = document.getElementById("searchInput").value;

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "AjaxFile/gethint.php?q=" + str, true);
                xmlhttp.send();

            })
        </script>
        <script src="assets/bootstrap 4//popper.min.js"></script>
        <script src="assets/bootstrap 4//bootstrap.min.js"></script>
        <script src="assets/bootstrap 4//bootstrap.bundle.min.js"></script>

    </body>

</html>
