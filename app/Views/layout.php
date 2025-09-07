<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Kas RT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .sidebar {
            height: 100vh;
            background-color: #191970;
            /* Navy */
            padding-top: 1rem;
        }

        .sidebar a,
        .sidebar span {
            color: white;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            margin-bottom: 8px;
            /* ✅ kasih jarak antar item */
        }

        .sidebar a:hover {
            background-color: rgba(112, 128, 144, 0.3);
            /* #708090 transparan saat hover */
            color: #fff;
        }

        /* efek aktif untuk link & teks */
        .sidebar a.active,
        .sidebar span.active {
            background-color: rgba(112, 128, 144, 0.4);
            /* #708090 transparan */
            color: #fff;
            font-weight: 500;
            border-radius: 5px;
            opacity: 1 !important;
        }

        .sidebar h4 {
            font-size: 1.6rem;
        }

        .content {
            padding: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #000 !important;
        }

        table {
            border-collapse: collapse !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="position-sticky">
                    <div class="text-white text-center rounded py-2 px-3 mx-3 mb-5 mt-2"
                        style="background-color: #708090;">
                        <h2 class="mb-0">Kas RT</h2>
                    </div>

                    <!-- Dashboard -->
                    <a href="/kas"
                        class="<?= current_url(true)->getSegment(1) == 'kas' && (current_url(true)->getTotalSegments() == 1) ? 'active' : '' ?>">
                        <b>Dashboard</b>
                    </a>

                    <!-- Tambah iuran -->
                    <span class="d-block px-3 py-2 mt-3 text-white 
                        <?= current_url(true)->getSegment(1) == 'kas' && current_url(true)->getSegment(2) == 'tambah' ? 'active' : '' ?> "
                        style="cursor: default; opacity: 0.7;">
                        <b>Tambah iuran</b>
                    </span>

                    <!-- Edit iuran -->
                    <span class="d-block px-3 py-2 mt-3 text-white 
                        <?= current_url(true)->getSegment(1) == 'kas' && current_url(true)->getSegment(2) == 'edit' ? 'active' : '' ?> "
                        style="cursor: default; opacity: 0.7;">
                        <b>Edit iuran</b>
                    </span>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto col-lg-10 content">
                <?= $this->renderSection('content') ?>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>