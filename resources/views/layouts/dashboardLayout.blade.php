<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.47.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('components.navbarDashboard')
    <div class="app">
        <div class="kiri">
            <div class="frame-notes">
                @include('components.sidebar')
            </div>
            <!-- List -->
        </div>
        <div class="kanan">
            <!-- Form -->
            <div class="content-kanan">

                @yield('content')
            </div>
        </div>
    </div>
</body>

<style>
    body {
        margin: 0px;
        overflow: hidden;
    }

    .app {
        font-family: "Avenir", Helvetica, Arial, sans-serif;
        color: #252523;
        padding: 0px;

        display: flex;
        width: 100%;
    }
.navbar, .navbar-brand{
    background: #d5b06a;
    color: #252523;
}
ul, li{
    color: #d5b06a;
    background: #252523;

}
.bg-coklat{
    background: #d5b06a;
    color: #252523;
}
.coklat{
    color: #252523;
    border: #d5b06a;
}
.content-kanan{
    display: flex;
    margin: 8px;
}
.kiri {
    width: 200px;
    background-color: #fbfcfe;
        color: #616161;
    }

    .frame-notes {
        overflow-y: scroll;
        overflow-x: hidden;
        height: 85vh;
        padding-top: 2%;
    }

    .bg-success {
        background: #219a63;
        color: white;
        outline: none;
    }

    .bg-success:hover {
        background: #24b774;
        color: white;
    }

    .bg-danger {
        background: #b50000;
        color: white;
    }

    .bg-danger:hover {
        background: #c50000;
    }

    .btn {
        border: none;
        font-size: 12px;
        text-align: center;
        letter-spacing: 1px;
        cursor: pointer;
        border-radius: 2px;
        padding: 7px 25px;
        outline: none;
    }

    .btn-new-note {
        width: 90%;
        padding: 12px 10px;
        margin: 10px 15px;
        text-align: left !important;
    }

    .kanan {
        width: 100%;
        overflow-y: scroll;
        height: 100vh;
        border-left: 1px solid gainsboro;
        background-color: #fbfcfe;
    }
.menu{
    background-color: #73b3de;
    color: #000000;
}
/* tbody{
    background-color: #fbfcfe;
}
table{
    color: #fbfcfe;

} */


.add-content{
    width: 1000px;
    overflow: auto;
}

.table-list {
border-collapse: collapse;
width: 100%;
}

th, td {
text-align: left;
padding: 8px;
/* background-color: #d5b06a; */
color: #252523;
}

tr:nth-child(even){background-color: #d5b06a}

th {
background-color: #252523;
color: #d5b06a;
}
    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f7f7f7;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>
</html>
