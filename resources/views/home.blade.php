@extends('layout.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{ $title }}</h1>
                        <ul class="breadcrumb-nav">
                            <li>Admin</li>
                            <li>{{ $title }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start About Area -->
    <section class="about section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="content wow fadeInRight" data-wow-delay=".4s">

                        <h2 class="text-center mb-5">{{ $title }}</h2>
                        <div class="d-block justify-content-around">
                            <article class="text-lg-start">
                                <p class="fs-2">
                                    Latar Belakang
                                </p>
                                <br>
                                <p class=""> Perkembangan teknologi yang berada di lingkungan masyarakat
                                    dunia,
                                    khususnya masyarakat Indonesia. Pada perkembangan computer juga banyak
                                    mengalami perubahan, salah satunya kegunaan computer pada berbagai bidang
                                    misalnya bisnis, kesehatan dan lain sebagainya. Hal tersebut tentunya mendorong
                                    para ahli untuk semakin mengembangkan teknologi pada ranah computer agar
                                    dapat membantu kerja manusia. Menurut Futurolog Alfin Toffler pada saat ini
                                    disebut sebagai zaman informasi yang bermula sejak akhir abad 20 Masehi, dari
                                    berkembangnya sistem informasi di zaman digital saat ini sangat berguna bagi
                                    manusia, khususnya bagi orang dewasa (Setiawan, 2017). Hal itu ditandai dalam
                                    kehidupan sehari-hari masyarakat dalam memanfaatkan teknologi, misalnya mulai
                                    dari tutorial memasak, informasi terkait berita terbaru maupun informasi
                                    mengenai masalah kesehatan. Tidak sedikit para orang tua percaya dan segera
                                    menyimpulkan penyakit apa yang diderita orang lain maupun balitanya dengan
                                    mencari informasi dalam internet dengan gejala-gejala yang dialami. Hal ini
                                    biasanya disebut dengan self diagnosis tanpa memeriksakan terlebih dahulu
                                    kepada tenaga medis.<br>
                                    Kesehatan merupakan asset berharga bagi umat manusia, maka dari itu siapa
                                    saja dapat terjangkit berbagai penyakit pada diri manusia, Termasuk balita atau
                                    anak dibawah umur 5 tahun sangatlah rentan terjangkit penyakit. Beberapa
                                    penyakit yang banyak menyerang balita di daerah tropis sangat ditakuti oleh
                                    orangtua. Apabila terjadi gangguan kesehatan terhadap anak maka orang tua
                                    tersebut akan mempercayakan hal tersebut kepada dokter ahli maupun tenaga
                                    medis kesehatan. Kemudahan adanya pakar atau dokter ahli memiliki kerja
                                    praktek yang terbatas, sehingga menyebabkan banyaknya pasien yang terpaksa
                                    harus menunggu antrian dan dengan biaya yang terbilang cukup mahal. Dalam hal
                                    2
                                    tersebut orangtua membutuhkan jasa layanan kesehatan agar dapat memudahkan
                                    dalam mendeteksi maupun mendiagnosa penyakit sedari dini, sehingga para
                                    orangtua bisa mencegah penyakit tersebut lebih awal yang sekiranya
                                    membutuhkan waktu untuk berkonsultasi dengan dokter, biaya yang mahal, jarak
                                    yang ditempuh serta waktu yang dikeluarkan agar tidak membebani orangtua
                                    untuk meminta jasa kesehatan bagi balitanya.<br>
                                    Karena hal tersebut sangat dibutuhkan alat bantu yang dapat mendiagnosa
                                    penyakit anak berupa sistem pakar. Salah satu implementasi yang dapat
                                    diterapkan sistem pakar dalam psikologi, yaitu sistem pakar dalam menentukan
                                    jenis gangguan perkembangan pada anak. Anak-anak maupun balita merupakan
                                    fase yang sangat rentan terhadap penyakitdan perlu diperhatikan pula dalam
                                    perkembangannya. Pada penelitian sebelumnya telah banyak dijelaskan
                                    membangun aplikasi pakar untuk mendiagnosis penyakit umum yang diderita
                                    balita, namun perlu adanya penyempurnaan dalam sistem mendiagnosis agar lebih
                                    userfriendly.<br>
                                    Sistem pakar merupakan aplikasi yang menggunakan computer untuk
                                    menyelesaikan masalah yang dipikirkan oleh para pakar. Pakar yang dijelaskan
                                    dalam hal ini adalah orang yang memiliki keahlian khusus yang bisa
                                    menyelesaikan masalah yang tidak bisa diselesaikan oleh orang awam. Pada
                                    penelitian ini, peneliti menggunakan metode forward chaining yaitu pelacakan
                                    dimulai dari penelusuran semua data dan aturan untuk mencapai tujuan. Metode
                                    forward chaining cocok untuk mendiagnosis awal pada penyakit dengan
                                    pelacakan dari gejala-gejala yang diderita (Dewi et al., 2012).
                                    Banyak orangtua belum memahami terkait dengan penyakit yang
                                    menyerang balita. Maka dari itu, orangtua perlu diberikan pemahaman tentang
                                    karakteristik penyakit-penyakit yang biasanya menyerang balita. Perlu adanya
                                    edukasi langkah-langkah antisipasi berdasarkan pengetahuan dari tenaga medis
                                    yang berkompeten terhadap penyakit balita.
                                    Salah satu cara untuk memberikan edukasi tentang identifikasi penyakit
                                    balita serta tindakan ansitipasi adalah dengan suatu sistem yang dapat digunakan
                                    3
                                    untuk konsultasi berdasarkan gejala-gejala penyakit yang dialami pada balita serta
                                    tindakan yang diperlukan untuk mengatasinya. Sistem tersebut adalah sistem
                                    pakar tentang penyakit balita yang dibuat berdasarkan kepakaran seorang pakar
                                    kesehatan balita. Sistem yang akan dibangun adalah sistem pakar yang dapat
                                    relative memberikan saran solusi terhadap permasalahan kesehatan balita.
                                    Berdasarkan penjelasan diatas, maka peneliti ingin membangun sistem
                                    pakar tentang penyakit pada balita dengan judul “Sistem Pakar Mendiagnosa
                                    Penyakit Balita Dengan Metode Forward Chaining berbasis Website”. Metode
                                    forward chaining ini terbukti cara yang paling tepat dalam mendeteksi suatu
                                    penyakit, sehingga pengguna tidak perlu menebak yang diderita oleh anak
                                    mereka, karena sistem ini akan memberikan jawaban berdasarkan fakta yang
                                    didapat dari seorang pakar. Fakta yang didapat dari hasil wawancara bersama
                                    seorang pakar spesialis anak Dr. I Nyoman Wardhana ini menghasilkan 10
                                    penyakit umum yang terjadi pada balita dibawah 5 tahun dan terdapat 49 gejala-
                                    gejala awal. Dengan diadakannya sistem ini diharapkan dapat memberikan
                                    informasi diagnosis dan cara pencegahannya secara tepat kepada orangtua
                                    mengenai penyakit anak (balita) yang sering diderita.
                                </p>
                            </article>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
