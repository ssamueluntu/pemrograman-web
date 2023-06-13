<?php 

session_start();

require 'function.php';

$image = query("SELECT * FROM gambar");

if( !isset($_SESSION["login"])){
    header("Location: ../index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITA</title>
    <link rel="icon" href="../img/logo-cita.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/create.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/reporting.css">
    <link rel="stylesheet" href="../css/mytask.css">
    <link rel="stylesheet" href="../css/image.css">
    <link rel="stylesheet" href="../css/calender.css">

</head>

<body>

    <div class="container">
        <nav>
            <div class="header menu-toggle">
                <button>
                    <ion-icon class="icon open" name="menu-outline"></ion-icon>
                </button>
            </div>
            <div class="header logout">
                <a href="logout.php"> 
                    <span>Logout</span>
                    <ion-icon class="icon" name="log-out-outline"></ion-icon>
                </a>
            </div>
        </nav>
        <aside class="sidebar">
            <ul class="aside-menu">
                <li class="aside-item">
                    <a class="create" id="btn-create">
                        <ion-icon class="icon" name="add-outline"></ion-icon>
                        <span>Create</span>
                    </a>
                </li>
                <li class="aside-item">
                    <a id="btn-home">
                        <ion-icon class="icon" name="home-outline"></ion-icon>
                        <span>Home</span>
                    </a>
                </li>
                <li class="aside-item">
                    <a id="btn-mytask">
                        <ion-icon class="icon" name="checkmark-outline"></ion-icon>
                        <span>My Tasks</span>
                    </a>
                </li>
                <li class="aside-item">
                    <a id="btn-report">
                        <ion-icon class="icon" name="book-outline"></ion-icon>
                        <span>Reporting</span>
                    </a>
                </li>
            </ul>
            <span class="reminder">
                <a id="btn-image">
                    <span>Image</span>
                    <ion-icon class="icon" name="image-outline"></ion-icon>
                </a>
            </span>
        </aside>
        <div class="content">
            <!-- Menu create -->
            <div id="container-content" class="create-content">
                <div class="wrapper">
                    <div class="box">
                        <div class="box-input">
                            <input type="text" name="" id="masukkan-task" placeholder="Enter new task here">
                        </div>
                        <div class="tugas">
                            <select class="pilih-tugas" name="kerja" id="opsi-tugas">
                                <option value="Tugas">Tugas</option>
                                <option value="Pribadi">Pribadi</option>
                                <option value="Kelompok">Kelompok</option>
                            </select>
                            <!-- Icon kalender -->
                            <div class="date-from">
                                <!-- <button type="submit" onclick="openPopup()"> <ion-icon id="calendar-icon" class="calender-icon" name="calendar-outline"></ion-icon></button> -->
                                <span>from</span>
                                <input id="input-date-from" type="date">
                            </div>
                            <div class="date-to">
                                <!-- <button type="submit" onclick="openPopup()"> <ion-icon id="calendar-icon" class="calender-icon" name="calendar-outline"></ion-icon></button> -->
                                <span>to</span>
                                <input id="input-date-to" type="date">
                            </div>
                        </div>

                        <button onclick="buatTask()">Create task</button>
                    </div>
                    <!-- calender -->
                    <div id="pop-up" class="calendar">
                        <button class="btn-close" type="submit" onclick="closePopup()">
                            <ion-icon class="" name="close-outline"></ion-icon>
                        </button>
                        <div class="calendar-header">
                            <span class="month-picker" id="month-picker">February</span>
                            <div class="year-picker">
                                <span class="year-change" id="prev-year">
                                    <pre><</pre>
                                </span>
                                <span id="year">2021</span>
                                <span class="year-change" id="next-year">
                                    <pre>></pre>
                                </span>
                            </div>
                        </div>
                        <div class="calendar-body">
                            <div class="calendar-week-day">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div class="calendar-days"></div>
                        </div>
                        <div class="month-list"></div>
                    </div>
                </div>
            </div>
            <!-- Akhir Menu Create -->
            <!-- Menu Home -->
            <div id="container-home" class="container-home">
                <div class="wrapper">
                    <span class="home-title">Home</span>
                    <div class="home-header">
                        <div class="datetime">
                            <div class="date"></div>
                        </div>
                        <p>Halo</p>
                        <h6>Let's Finish Your Plan</h6>
                    </div>
                </div>
            </div>
            <!-- Akhir Menu Home -->
            <!-- Menu Task -->
             <!-- Menu Task -->
             <div id="container-task" class="container-task">
                <div class="wrapper-task">
                    <div class="task-header">
                        <div class="task-title">
                            <span>My Task</span>
                        </div>
                        <div class="task-menu">
                            <ul>
                                <li><a id="btn-semua" href="#">Daftar task</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-task">
                        <table id="table-task" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="task-name-header col-satu">Task Name</th>
                                    <th class="due-date-header col-dua">Due Date</th>
                                    <th class="project-header col-tiga">Project</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Akhir Menu Task -->
            <!-- Menu Reporting -->
            <div id="container-reporting" class="container-report">
                <div class="content-report">
                    <div class="reporting-title">
                        <span class="report">
                            <ion-icon name="folder"></ion-icon>
                        </span>
                        <h2>Reporting</h2>
                    </div>
                    <hr>
                    <div class="main-cards">
                        <div class="card">
                            <div class="card-inner">
                                <h3>PRIBADI</h3>
                            </div>
                            <div class="lapor">
                                <table>
                                    <tr>
                                        <td>Complete</td>
                                        <td> : </td>
                                        <td> 3 </td>
                                    </tr>
                                    <tr>
                                        <td>Incomplete</td>
                                        <td> :</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Overdue</td>
                                        <td> :</td>
                                        <td> 2</td>
                                    </tr>
                                    <tr>
                                        <td>Task Totals</td>
                                        <td> :</td>
                                        <td> 6</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-inner">
                                <h3>TUGAS</h3>
                            </div>
                            <div class="lapor">
                                <table>
                                    <tr>
                                        <td>Complete</td>
                                        <td> : </td>
                                        <td> 3 </td>
                                    </tr>
                                    <tr>
                                        <td>Incomplete</td>
                                        <td> :</td>
                                        <td> 1</td>
                                    </tr>
                                    <tr>
                                        <td>Overdue</td>
                                        <td> :</td>
                                        <td> 2</td>
                                    </tr>
                                    <tr>
                                        <td>Task Totals</td>
                                        <td> :</td>
                                        <td> 6</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-inner">
                                <h3>WISHLIST</h3>
                            </div>
                            <div class="lapor">
                                <table>
                                    <tr>
                                        <td>Complete</td>
                                        <td> :</td>
                                        <td> 3</td>
                                    </tr>
                                    <tr>
                                        <td>Incomplete</td>
                                        <td> :</td>
                                        <td> 1</td>
                                    </tr>
                                    <tr>
                                        <td>Overdue</td>
                                        <td> :</td>
                                        <td> 2</td>
                                    </tr>
                                    <tr>
                                        <td>Task Totals</td>
                                        <td> :</td>
                                        <td> 6</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-inner">
                                <h3>KELOMPOK</h3>
                            </div>
                            <div class="lapor">
                                <table>
                                    <tr>
                                        <td>Complete</td>
                                        <td> : </td>
                                        <td> 3</td>
                                    </tr>
                                    <tr>
                                        <td>Incomplete</td>
                                        <td> :</td>
                                        <td> 1</td>
                                    </tr>
                                    <tr>
                                        <td>Overdue</td>
                                        <td> :</td>
                                        <td> 2</td>
                                    </tr>
                                    <tr>
                                        <td>Task Totals</td>
                                        <td> : </td>
                                        <td> 6</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Menu Reporting -->
            <!-- Menu Image -->
            <div id="container-image" class="container-image">
                <div class="wrapper-image">
                    <div id="add-form" class="container-form-image">
                        <button id="back">
                            <ion-icon class="icon" name="arrow-back-outline"></ion-icon>
                            <span>Back</span>
                        </button>
                        <form action="" method="post">
                                <ul>
                                    <li>
                                        <h1>Tambah gambar</h1>
                                    </li>
                                    <li>
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama">
                                    </li>
                                    <li>
                                        <label for="gambar">Gambar</label>
                                        <input type="text" name="gambar" id="gambar">
                                    </li>
                                    <li>
                                        <button class="btn" type="submit" name="submit">Tambah Gambar</button>
                                    </li>
                                </ul>
                        </form>
                    </div>
                    <div id="content-image" class="content-image">
                        <h1>Gambar</h1>
                        <ul>
                            <?php foreach( $image as $img ) : ?>
                            <li class="list-image">
                                <ion-icon class="icon-delete" name="close-outline"></ion-icon>
                                <img src="../img/<?= $img['gambar']; ?>" alt="<?= $img["nama"]; ?>">
                                <span class="name-img"><?= $img['nama']; ?></span>
                            </li>
                            <?php endforeach; ?>
                            <li class="list-image">
                                <button id="add-image">
                                    <ion-icon class="icon icon-add" name="add-outline"></ion-icon>
                                    <span>add image</span>
                                </button>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Akhir Menu Image -->
        </div>
    </div>

    <script src="../js/menu.js"></script>
    <script src="../js/link_task.js"></script>
    <script src="../js/filter_task.js"></script>
    <script src="../js/date.js"></script>

    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>