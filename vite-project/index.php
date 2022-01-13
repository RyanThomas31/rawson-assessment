<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite App</title>
</head>
<body>
    <div id="container">

        <div class="header">
            <div class="left-side">
                <div class="logo"></div>
                <a href="/index.php">
                    Valuations
                </a>
            </div>
            <div class="right-side">
                <div class="info">
                    <a>Ryan Thomas</a>
                    <button>Logout</button>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="button-space">
                <button>+ New valuation</button>
            </div>
            <section class="progress-report">

            </section>
            <section class="valuation-details">
                <input type="search" name="search" id="search" placeholder="Search valuations by address or seller's name">
                <div class="sellers-table">
                    <table>
                        <tbody>
                            <tr>
                                <th>Street address</th>
                                <th>Seller</th>
                                <th>Progress</th>
                                <th>Created</th>
                                <th>Completed</th>
                                <th>Report</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="filters">
                        <div class="left-side">
                            
                        </div>
                        <div class="right-side">

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script type="script" src="/main.js"></script>
    <script>
        $(document).ready(function() {
            var kebab = document.querySelector(".kebab"),
                middle = document.querySelector(".middle"),
                cross = document.querySelector(".cross"),
                dropdown = document.querySelector(".dropdown");

                kebab.addEventListener("click", function () {
                    middle.classList.toggle("active");
                    cross.classList.toggle("active");
                    dropdown.classList.toggle("active");
                });
        });
        var jsonData = $.getJSON("sellers.json", function() {
            var sellers = jsonData['responseJSON']['Seller'];
            var reportTotal = sellers.length;
            var total = $('<h2>' + reportTotal + '<a>Total valuations</a></h2>');
            $(total).appendTo('.progress-report');
            for (var i = 0; i < sellers.length; i++) {
                var sellerInfo = sellers[i];
                var tableData = $('<tr data-id=' + sellerInfo['Entry'] + '><td><div class="seller-image"><img src=' + sellerInfo['Link'] + ' alt="Italian Trulli"></div> <a class="seller-address">' + sellerInfo['Address'] + '</a><br/><a>' + sellerInfo['Updated'] + '</a></td> <td>' + sellerInfo['Name'] + '</td> <td>' + sellerInfo['Progress'] + '</td> <td>' + sellerInfo['Created'] + '</td> <td>' + sellerInfo['Completed'] + '</td> <td class="eyecon"><a class="fa fa-eye"></a></td> <td class="ellipsis"><div class="kebab"><figure></figure><figure class="middle"></figure><p class="cross">x</p><figure></figure><ul class="dropdown"><a>VALUATION</a><li><a><i class="fa fa-edit"></i> Edit</a></li><li><a><i class="fa fa-print"></i> Print</a></li><li><a><i class="fa fa-envelope"></i> Email</a></li><hr><a>PROPERTY REPORT</a><li><a><i class="fa fa-print"></i> Print</a></li><li><a><i class="fa fa-history"></i> Update sales</a></li><hr><li><a><i class="fa fa-trash"></i> Delete valuation</a></li></ul></div></td> </tr>');
                $(tableData).appendTo('table');
            }
        });
        
    </script>
</body>
</html>