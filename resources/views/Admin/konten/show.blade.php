<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $konten->title }} - Detail Konten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 0;
            min-height: 100vh;
        }

        .container {
            max-width: 900px;
            background-color: #ffffff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .content-header {
            border-bottom: 2px solid #0056b3;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .content-header h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #003366;
        }

        .content-header .badge {
            font-size: 1rem;
            font-weight: 600;
        }

        .img-fluid {
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .img-fluid:hover {
            transform: scale(1.05);
            box-shadow: 0px 12px 30px rgba(0, 0, 0, 0.2);
        }

        .content-body {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .content-body p {
            line-height: 1.8;
            font-size: 1.2rem;
            color: #555;
        }

        .content-footer {
            text-align: center;
            padding: 20px;
            background-color: #0056b3;
            color: white;
            border-radius: 10px;
            margin-top: 40px;
        }

        .content-footer p {
            margin-bottom: 0;
            font-size: 1.1rem;
        }

        .section-divider {
            border-bottom: 2px solid #eeeeee;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 12px 24px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #004085;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .content-header h1 {
                font-size: 2.5rem;
            }

            .content-body p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="content-header">
                <h1>{{ $konten->title }}</h1>
                <div class="row mb-3">
                    <div class="col-md-8">
                        <span class="badge bg-info">{{ $konten->kategori->name ?? 'Kategori Tidak Tersedia' }}</span>
                    </div>
                    <div class="col-md-4 text-end">
                        @if($konten->status == 'draft')
                        <span class="badge bg-warning">Draft</span>
                        @elseif($konten->status == 'archived')
                        <span class="badge bg-secondary">Archived</span>
                        @else
                        <span class="badge bg-success">Published</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 text-center">
                    <img src="{{ asset('storage/images/' . $konten->image) }}" alt="{{ $konten->title }}" class="img-fluid rounded">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <i class="lead">{{ $konten->excerpt }}</i>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="content-body" style="text-align: justify;">
                        <p>{{ $konten->body }}</p>
                    </div>
                </div>
            </div>

            <div class="content-footer">
                <p>&copy; {{ date('Y') }} - Pemerintah Kabupaten Banyuwangi - Semua hak cipta dilindungi.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
