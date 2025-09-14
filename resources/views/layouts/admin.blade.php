<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Dashboard Admin')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}">
    @vite(['resources/css/styles.css','resources/js/app.js'])
    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 flex">

    {{-- Sidebar --}}
    <aside id="sidebar"
        class="fixed md:static top-0 left-0 w-64 bg-[#2b2b45] text-white min-h-screen p-4 transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-50">
        <div class="flex items-center justify-between mb-8">
            <span class="font-bold">Admin Panel</span>
            {{-- Tombol close hanya muncul di mobile --}}
            <button id="closeSidebar" class="md:hidden text-white text-2xl">&times;</button>
        </div>
        <nav class="space-y-2">
            <a href="{{ route('dashboard') }}" class="block py-2 px-3 rounded hover:bg-blue-700">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="{{ route('admin.articles.index') }}" class="block py-2 px-3 rounded hover:bg-blue-700">
                <i class="bi bi-file-earmark-text"></i> Articles
            </a>
            <a href="{{ route('admin.users.index') }}" class="block py-2 px-3 rounded hover:bg-blue-700">
                <i class="bi bi-people"></i> Users
            </a>
            <form action="{{ route('logout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="w-full text-left py-2 px-3 rounded hover:bg-red-600">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </nav>
    </aside>

    {{-- Content --}}
    <main class="flex-1 p-4 md:p-8 w-full">
        {{-- Navbar kecil hanya muncul di mobile --}}
        <div class="md:hidden flex items-center justify-between mb-4">
            <h1 class="text-lg font-bold">@yield('title','Dashboard')</h1>
            <button id="openSidebar" class="text-[#2b2b45] text-2xl">
                <i class="bi bi-list"></i>
            </button>
        </div>

        {{-- Judul untuk desktop --}}
        <h1 class="hidden md:block text-2xl font-bold mb-6">@yield('title','Dashboard')</h1>

        @yield('content')
    </main>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- CKEditor--}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    <script>
        // Sidebar toggle
        const sidebar = document.getElementById("sidebar");
        const openBtn = document.getElementById("openSidebar");
        const closeBtn = document.getElementById("closeSidebar");

        if (openBtn) {
            openBtn.addEventListener("click", () => {
                sidebar.classList.remove("-translate-x-full");
            });
        }
        if (closeBtn) {
            closeBtn.addEventListener("click", () => {
                sidebar.classList.add("-translate-x-full");
            });
        }
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [
                        'undo', 'redo', '|',
                        'heading', '|',
                        'bold', 'italic', 'underline', 'strikethrough', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'alignment', '|',
                        'link', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
                        'code', 'codeBlock', '|',
                        'subscript', 'superscript', '|',
                        'removeFormat'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn', 'tableRow', 'mergeTableCells'
                    ]
                },
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' }
                    ]
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>
</html>
