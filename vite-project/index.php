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
                </div>
            </section>
        </div>
    </div>
    <script type="script" src="/main.js"></script>
    <script>
        var jsonData = $.getJSON("sellers.json", function() {
            var sellers = jsonData['responseJSON']['Seller'];
            for (var i = 0; i < sellers.length; i++) {
                var sellerInfo = sellers[i];
                console.log(sellerInfo);
                var tableData = $('<tr><td>' + sellerInfo['Address'] + '<br/><a>' + sellerInfo['Updated'] + '</a></td> <td>' + sellerInfo['Name'] + '</td> <td>' + sellerInfo['Progress'] + '</td> <td>' + sellerInfo['Created'] + '</td> <td>' + sellerInfo['Completed'] + '</td> <td class="eyecon"><a class="fa fa-eye"></a></td> <td class="ellipsis"><a class="fa fa-ellipsis-v"></a></td> </tr>');
                $(tableData).appendTo('table');
            }
        })
    </script>
</body>
</html>