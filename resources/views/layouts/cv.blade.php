<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV - Gagah Fajar')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.7;
            color: #2d3748;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .cv-container {
            max-width: 1100px;
            margin: 2rem auto;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
            overflow: hidden;
            position: relative;
        }
        .cv-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #1B3C53, #2A4A5C, #3A5A6B, #4A6A7A);
        }
        .header-section {
            background: linear-gradient(135deg, #1B3C53 0%, #2A4A5C 50%, #3A5A6B 100%);
            color: white;
            padding: 3rem 0;
            position: relative;
            overflow: hidden;
        }
        .section-title {
            color: #2d3748;
            border-bottom: 3px solid #1B3C53;
            padding-bottom: 0.8rem;
            margin-bottom: 2rem;
            font-weight: 700;
            font-size: 1.3rem;
            position: relative;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #1B3C53, #2A4A5C);
        }
        .skill-category {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid #e9ecef;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .skill-category-title {
            color: #1B3C53;
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #1B3C53;
            padding-bottom: 0.5rem;
            display: inline-block;
        }
        .skill-badges-container {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .skill-badge {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.85rem;
            display: inline-block;
            font-weight: 500;
            white-space: nowrap;
        }
        .contact-info {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 1.5rem;
            border: 1px solid #e9ecef;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        .contact-item {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }
        .contact-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        .contact-item i {
            font-size: 1.2rem;
            width: 25px;
            text-align: center;
            color: #1B3C53;
        }
        .experience-item, .education-item, .organization-item {
            border-left: 4px solid #1B3C53;
            padding-left: 1.5rem;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            position: relative;
        }
        .experience-item::before, .education-item::before, .organization-item::before {
            content: '';
            position: absolute;
            left: -4px;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(180deg, #1B3C53, #2A4A5C);
        }
        .timeline-date {
            color: #1B3C53;
            font-weight: 700;
            font-size: 0.9rem;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        .badge {
            font-size: 0.8rem;
            padding: 0.5rem 0.8rem;
            border-radius: 20px;
        }
        .btn {
            border-radius: 25px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }
        .text-justify {
            text-align: justify;
        }
        .list-unstyled li {
            margin-bottom: 0.5rem;
            padding: 0.5rem;
            border-radius: 8px;
        }
        .portfolio-links {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid #e9ecef;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .portfolio-item {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 1rem;
        }
        .portfolio-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .portfolio-item i {
            font-size: 1.2rem;
            width: 25px;
            text-align: center;
            color: #1B3C53;
        }
        .row.g-4 {
            margin: 0 -1rem;
        }
        .row.g-4 > * {
            padding: 0 1rem;
        }
        .col-lg-5 {
            position: sticky;
            top: 2rem;
            height: fit-content;
        }
        .col-lg-7 {
            padding-left: 2rem;
        }
        @media (max-width: 991.98px) {
            .col-lg-5 {
                position: static;
                margin-bottom: 2rem;
            }
            .col-lg-7 {
                padding-left: 1rem;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="cv-container">
        @include('partials.navbar')
        
        <div class="container-fluid p-4">
            @yield('content')
        </div>
        
        @include('partials.footer')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
