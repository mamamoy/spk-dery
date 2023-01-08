@extends('layout.main')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{ $title }}</h1>
                        <ul class="breadcrumb-nav">
                            <li>User</li>
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
                    <div class="content wow fadeInRight text-center" data-wow-delay=".4s">
                        <h4>{{ $subtitle }}</h4>
                        <div class="d-block justify-content-around">
                            <ul class="nav nav-pills" id="myTab" role="tablist" hidden>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="G1-tab" data-bs-toggle="tab"
                                        data-bs-target="#G1-tab-pane" type="button" role="tab" aria-controls="G1-tab-pane"
                                        aria-selected="true">G1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G2-tab" data-bs-toggle="tab" data-bs-target="#G2-tab-pane"
                                        type="button" role="tab" aria-controls="G2-tab-pane"
                                        aria-selected="false">G2</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G3-tab" data-bs-toggle="tab" data-bs-target="#G3-tab-pane"
                                        type="button" role="tab" aria-controls="G3-tab-pane"
                                        aria-selected="false">G3</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G4-tab" data-bs-toggle="tab" data-bs-target="#G4-tab-pane"
                                        type="button" role="tab" aria-controls="G4-tab-pane"
                                        aria-selected="false">G4</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G5-tab" data-bs-toggle="tab" data-bs-target="#G5-tab-pane"
                                        type="button" role="tab" aria-controls="G5-tab-pane"
                                        aria-selected="false">G5</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G6-tab" data-bs-toggle="tab" data-bs-target="#G6-tab-pane"
                                        type="button" role="tab" aria-controls="G6-tab-pane"
                                        aria-selected="false">G6</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G7-tab" data-bs-toggle="tab" data-bs-target="#G7-tab-pane"
                                        type="button" role="tab" aria-controls="G7-tab-pane"
                                        aria-selected="false">G7</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G29-tab" data-bs-toggle="tab"
                                        data-bs-target="#G29-tab-pane" type="button" role="tab" aria-controls="G29-tab-pane"
                                        aria-selected="false">G29</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G30-tab" data-bs-toggle="tab"
                                        data-bs-target="#G30-tab-pane" type="button" role="tab" aria-controls="G30-tab-pane"
                                        aria-selected="false">G30</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G31-tab" data-bs-toggle="tab"
                                        data-bs-target="#G31-tab-pane" type="button" role="tab" aria-controls="G31-tab-pane"
                                        aria-selected="false">G31</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G32-tab" data-bs-toggle="tab"
                                        data-bs-target="#G32-tab-pane" type="button" role="tab" aria-controls="G32-tab-pane"
                                        aria-selected="false">G32</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G33-tab" data-bs-toggle="tab"
                                        data-bs-target="#G33-tab-pane" type="button" role="tab" aria-controls="G33-tab-pane"
                                        aria-selected="false">G33</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G34-tab" data-bs-toggle="tab"
                                        data-bs-target="#G34-tab-pane" type="button" role="tab" aria-controls="G34-tab-pane"
                                        aria-selected="false">G34</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G12-tab" data-bs-toggle="tab"
                                        data-bs-target="#G12-tab-pane" type="button" role="tab" aria-controls="G12-tab-pane"
                                        aria-selected="false">G12</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G8-tab" data-bs-toggle="tab"
                                        data-bs-target="#G8-tab-pane" type="button" role="tab" aria-controls="G8-tab-pane"
                                        aria-selected="false">G8</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G9-tab" data-bs-toggle="tab"
                                        data-bs-target="#G9-tab-pane" type="button" role="tab" aria-controls="G9-tab-pane"
                                        aria-selected="false">G9</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G10-tab" data-bs-toggle="tab"
                                        data-bs-target="#G10-tab-pane" type="button" role="tab" aria-controls="G10-tab-pane"
                                        aria-selected="false">G10</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G11-tab" data-bs-toggle="tab"
                                        data-bs-target="#G11-tab-pane" type="button" role="tab" aria-controls="G11-tab-pane"
                                        aria-selected="false">G11</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="13-tab" data-bs-toggle="tab"
                                        data-bs-target="#13-tab-pane" type="button" role="tab" aria-controls="13-tab-pane"
                                        aria-selected="false">13</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G14-tab" data-bs-toggle="tab"
                                        data-bs-target="#G14-tab-pane" type="button" role="tab" aria-controls="G14-tab-pane"
                                        aria-selected="false">G14</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G15-tab" data-bs-toggle="tab"
                                        data-bs-target="#G15-tab-pane" type="button" role="tab" aria-controls="G15-tab-pane"
                                        aria-selected="false">G15</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G16-tab" data-bs-toggle="tab"
                                        data-bs-target="#G16-tab-pane" type="button" role="tab" aria-controls="G16-tab-pane"
                                        aria-selected="false">G16</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G24-tab" data-bs-toggle="tab"
                                        data-bs-target="#G24-tab-pane" type="button" role="tab" aria-controls="G24-tab-pane"
                                        aria-selected="false">G24</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G25-tab" data-bs-toggle="tab"
                                        data-bs-target="#G25-tab-pane" type="button" role="tab" aria-controls="G25-tab-pane"
                                        aria-selected="false">G25</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G26-tab" data-bs-toggle="tab"
                                        data-bs-target="#G26-tab-pane" type="button" role="tab" aria-controls="G26-tab-pane"
                                        aria-selected="false">G26</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G27-tab" data-bs-toggle="tab"
                                        data-bs-target="#G27-tab-pane" type="button" role="tab" aria-controls="G27-tab-pane"
                                        aria-selected="false">G27</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G47-tab" data-bs-toggle="tab"
                                        data-bs-target="#G47-tab-pane" type="button" role="tab" aria-controls="G47-tab-pane"
                                        aria-selected="false">G47</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G48-tab" data-bs-toggle="tab"
                                        data-bs-target="#G48-tab-pane" type="button" role="tab" aria-controls="G48-tab-pane"
                                        aria-selected="false">G48</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G49-tab" data-bs-toggle="tab"
                                        data-bs-target="#G49-tab-pane" type="button" role="tab" aria-controls="G49-tab-pane"
                                        aria-selected="false">G49</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G6-tab" data-bs-toggle="tab"
                                        data-bs-target="#G6-tab-pane" type="button" role="tab" aria-controls="G6-tab-pane"
                                        aria-selected="false">G6</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G17-tab" data-bs-toggle="tab"
                                        data-bs-target="#G17-tab-pane" type="button" role="tab" aria-controls="G17-tab-pane"
                                        aria-selected="false">G17</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G18-tab" data-bs-toggle="tab"
                                        data-bs-target="#G18-tab-pane" type="button" role="tab" aria-controls="G18-tab-pane"
                                        aria-selected="false">G18</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G19-tab" data-bs-toggle="tab"
                                        data-bs-target="#G19-tab-pane" type="button" role="tab" aria-controls="G19-tab-pane"
                                        aria-selected="false">G19</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G20-tab" data-bs-toggle="tab"
                                        data-bs-target="#G20-tab-pane" type="button" role="tab" aria-controls="G20-tab-pane"
                                        aria-selected="false">G20</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G21-tab" data-bs-toggle="tab"
                                        data-bs-target="#G21-tab-pane" type="button" role="tab" aria-controls="G21-tab-pane"
                                        aria-selected="false">G21</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G22-tab" data-bs-toggle="tab"
                                        data-bs-target="#G22-tab-pane" type="button" role="tab" aria-controls="G22-tab-pane"
                                        aria-selected="false">G22</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G23-tab" data-bs-toggle="tab"
                                        data-bs-target="#G23-tab-pane" type="button" role="tab" aria-controls="G23-tab-pane"
                                        aria-selected="false">G23</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G41-tab" data-bs-toggle="tab"
                                        data-bs-target="#G41-tab-pane" type="button" role="tab" aria-controls="G41-tab-pane"
                                        aria-selected="false">G41</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G42-tab" data-bs-toggle="tab"
                                        data-bs-target="#G42-tab-pane" type="button" role="tab" aria-controls="G42-tab-pane"
                                        aria-selected="false">G42</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G43-tab" data-bs-toggle="tab"
                                        data-bs-target="#G43-tab-pane" type="button" role="tab" aria-controls="G43-tab-pane"
                                        aria-selected="false">G43</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G44-tab" data-bs-toggle="tab"
                                        data-bs-target="#G44-tab-pane" type="button" role="tab" aria-controls="G44-tab-pane"
                                        aria-selected="false">G44</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G45-tab" data-bs-toggle="tab"
                                        data-bs-target="#G45-tab-pane" type="button" role="tab" aria-controls="G45-tab-pane"
                                        aria-selected="false">G45</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G47-tab" data-bs-toggle="tab"
                                        data-bs-target="#G47-tab-pane" type="button" role="tab" aria-controls="G47-tab-pane"
                                        aria-selected="false">G47</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G35-tab" data-bs-toggle="tab"
                                        data-bs-target="#G35-tab-pane" type="button" role="tab" aria-controls="G35-tab-pane"
                                        aria-selected="false">G35</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G36-tab" data-bs-toggle="tab"
                                        data-bs-target="#G36-tab-pane" type="button" role="tab" aria-controls="G36-tab-pane"
                                        aria-selected="false">G36</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G37-tab" data-bs-toggle="tab"
                                        data-bs-target="#G37-tab-pane" type="button" role="tab" aria-controls="G37-tab-pane"
                                        aria-selected="false">G37</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G38-tab" data-bs-toggle="tab"
                                        data-bs-target="#G38-tab-pane" type="button" role="tab" aria-controls="G38-tab-pane"
                                        aria-selected="false">G38</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G39-tab" data-bs-toggle="tab"
                                        data-bs-target="#G39-tab-pane" type="button" role="tab" aria-controls="G39-tab-pane"
                                        aria-selected="false">G39</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="G40-tab" data-bs-toggle="tab"
                                        data-bs-target="#G40-tab-pane" type="button" role="tab" aria-controls="G40-tab-pane"
                                        aria-selected="false">G40</button>
                                </li>
                            </ul>
                            <form action="{{route('konsultasi.store')}}" method="POST">
                                @csrf
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active text-center" id="G1-tab-pane" role="tabpanel"
                                        aria-labelledby="G1-tab" tabindex="0">
                                        <p>1. Apakah anak anda mengalami gejala demam ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G001" id="G001" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G001" class="G001" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G001" class="G001" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-2">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G2-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G2-tab-pane" type="button" role="tab"
                                                        aria-controls="G2-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden g-17">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G17-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G17-tab-pane" type="button" role="tab"
                                                        aria-controls="G17-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G2-tab-pane" role="tabpanel" aria-labelledby="G2-tab"
                                        tabindex="0">
                                        <p>2. Apakah anak anda mengalami gejala mata merah dan berair ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G002" id="G002" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G002" class="G002" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G002" class="G002" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-3">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G3-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G3-tab-pane" type="button" role="tab"
                                                        aria-controls="G3-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden g-12">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G12-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G12-tab-pane" type="button" role="tab"
                                                        aria-controls="G12-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G3-tab-pane" role="tabpanel" aria-labelledby="G3-tab"
                                        tabindex="0">
                                        <p>3. Apakah anak anda mengalami gejala batuk ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G003" id="G003" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G003" class="G003" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G003" class="G003" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-4">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G4-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G4-tab-pane" type="button" role="tab"
                                                        aria-controls="G4-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden g-29">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G29-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G29-tab-pane" type="button" role="tab"
                                                        aria-controls="G29-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G4-tab-pane" role="tabpanel" aria-labelledby="G4-tab"
                                        tabindex="0">
                                        <p>4. Apakah anak anda mengalami gejala pilek ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G004" id="G004" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G004" class="G004" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G004" class="G004" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-5">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G5-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G5-tab-pane" type="button" role="tab"
                                                        aria-controls="G5-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit
                                                cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G5-tab-pane" role="tabpanel" aria-labelledby="G5-tab"
                                        tabindex="0">
                                        <p>5. Apakah anak anda mengalami gejala bagian rongga mulut terdapat bercak putih ?
                                        </p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G005" id="G005" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G005" class="G005" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G005" class="G005" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-6">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G6-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G6-tab-pane" type="button" role="tab"
                                                        aria-controls="G6-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit
                                                cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G6-tab-pane" role="tabpanel" aria-labelledby="G6-tab"
                                        tabindex="0">
                                        <p>6. Apakah anak anda mengalami gejala muncul kemerahan pada kulit ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G006" id="G006" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G006" class="G006" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G006" class="G006" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-7">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G7-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G7-tab-pane" type="button" role="tab"
                                                        aria-controls="G7-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit
                                                cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G7-tab-pane" role="tabpanel" aria-labelledby="G7-tab"
                                        tabindex="0">
                                        <p>7. Apakah anak anda mengalami gejala terdapat ruam berwarna coklat kemerahan di
                                            seluruh tubuh ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G007" id="G007" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G007" class="G007" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G007" class="G007" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G29-tab-pane" role="tabpanel" aria-labelledby="G29-tab"
                                        tabindex="0">
                                        <p>29. Apakah anak anda mengalami gejala dahak secara berlebihan ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G029" id="G029" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G029" class="G029" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G029" class="G029" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-30">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G30-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G30-tab-pane" type="button" role="tab"
                                                        aria-controls="G30-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G30-tab-pane" role="tabpanel" aria-labelledby="G30-tab"
                                        tabindex="0">
                                        <p>30. Apakah anak anda mengalami gejala suara pernafasan terasa kering ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G030" id="G030" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G030" class="G030" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G030" class="G030" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-31">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G31-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G31-tab-pane" type="button" role="tab"
                                                        aria-controls="G31-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G31-tab-pane" role="tabpanel" aria-labelledby="G31-tab"
                                        tabindex="0">
                                        <p>31. Apakah anak anda mengalami gejala pola nafas berubah ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G031" id="G031" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G031" class="G031" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G031" class="G031" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-32">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G32-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G32-tab-pane" type="button" role="tab"
                                                        aria-controls="G32-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G32-tab-pane" role="tabpanel" aria-labelledby="G32-tab"
                                        tabindex="0">
                                        <p>32. Apakah anak anda mengalami gejala sulit berbicara ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G032" id="G032" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G032" class="G032" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G032" class="G032" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-33">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G33-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G33-tab-pane" type="button" role="tab"
                                                        aria-controls="G33-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G33-tab-pane" role="tabpanel" aria-labelledby="G33-tab"
                                        tabindex="0">
                                        <p>33. Apakah anak anda mengalami gejala jumlah nafas diatas normal (lebih dari 24-40x/menit) ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G033" id="G033" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G033" class="G033" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G033" class="G033" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-34">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G34-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G34-tab-pane" type="button" role="tab"
                                                        aria-controls="G34-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G34-tab-pane" role="tabpanel" aria-labelledby="G34-tab"
                                        tabindex="0">
                                        <p>34. Apakah anak anda mengalami gejala berat badan menurun minimal 10% dibawah rentang ideal ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G034" id="G034" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G034" class="G034" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G034" class="G034" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G12-tab-pane" role="tabpanel" aria-labelledby="G12-tab"
                                        tabindex="0">
                                        <p>12. Apakah anak anda mengalami hilangnya nafsu makan ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G012" id="G012" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G012" class="G012" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G012" class="G012" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-21">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G21-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G21-tab-pane" type="button" role="tab"
                                                        aria-controls="G21-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden g-8">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G8-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G8-tab-pane" type="button" role="tab"
                                                        aria-controls="G8-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G8-tab-pane" role="tabpanel" aria-labelledby="G8-tab"
                                        tabindex="0">
                                        <p>8. Apakah anak anda mengalami gejala menggigil ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G008" id="G008" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G008" class="G008" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G008" class="G008" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-9">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G9-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G9-tab-pane" type="button" role="tab"
                                                        aria-controls="G9-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden g-24">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G24-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G24-tab-pane" type="button" role="tab"
                                                        aria-controls="G24-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G9-tab-pane" role="tabpanel" aria-labelledby="G9-tab"
                                        tabindex="0">
                                        <p>9. Apakah anak anda mengalami gejala tekanan darah meningkat ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G009" id="G009" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G009" class="G009" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G009" class="G009" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-10">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G10-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G10-tab-pane" type="button" role="tab"
                                                        aria-controls="G10-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G10-tab-pane" role="tabpanel" aria-labelledby="G10-tab"
                                        tabindex="0">
                                        <p>10. Apakah anak anda mengalami gejala lemas ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G010" id="G010" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G010" class="G010" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G010" class="G010" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-11">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G11-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G11-tab-pane" type="button" role="tab"
                                                        aria-controls="G11-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G11-tab-pane" role="tabpanel" aria-labelledby="G11-tab"
                                        tabindex="0">
                                        <p>11. Apakah anak anda mengalami gejala muncul ruam kecil berwarna merah ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G011" id="G011" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G011" class="G011" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G011" class="G011" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-13">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G13-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G13-tab-pane" type="button" role="tab"
                                                        aria-controls="G13-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G13-tab-pane" role="tabpanel" aria-labelledby="G13-tab"
                                        tabindex="0">
                                        <p>13. Apakah anak anda mengalami gejala susah buang air besar ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G013" id="G013" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G013" class="G013" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G013" class="G013" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-14">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G14-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G14-tab-pane" type="button" role="tab"
                                                        aria-controls="G14-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G14-tab-pane" role="tabpanel" aria-labelledby="G14-tab"
                                        tabindex="0">
                                        <p>14. Apakah anak anda mengalami gejala sakit kepala ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G014" id="G014" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G014" class="G014" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G014" class="G014" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-15">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G15-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G15-tab-pane" type="button" role="tab"
                                                        aria-controls="G15-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G15-tab-pane" role="tabpanel" aria-labelledby="G15-tab"
                                        tabindex="0">
                                        <p>15. Apakah anak anda mengalami gejala muntah ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G015" id="G015" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G015" class="G015" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G015" class="G015" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-16">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G16-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G16-tab-pane" type="button" role="tab"
                                                        aria-controls="G16-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G16-tab-pane" role="tabpanel" aria-labelledby="G16-tab"
                                        tabindex="0">
                                        <p>16. Apakah anak anda mengalami gejala suhu badan cenderung naik turun ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G016" id="G016" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G016" class="G016" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G016" class="G016" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G24-tab-pane" role="tabpanel" aria-labelledby="G24-tab"
                                        tabindex="0">
                                        <p>24. Apakah anak anda mengalami gejala kejang ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G024" id="G024" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G024" class="G024" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G024" class="G024" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-25">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G25-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G25-tab-pane" type="button" role="tab"
                                                        aria-controls="G25-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G25-tab-pane" role="tabpanel" aria-labelledby="G25-tab"
                                        tabindex="0">
                                        <p>25. Apakah anak anda mengalami gejala denyut jantung cepat ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G025" id="G025" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G025" class="G025" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G025" class="G025" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-26">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G26-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G26-tab-pane" type="button" role="tab"
                                                        aria-controls="G26-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G26-tab-pane" role="tabpanel" aria-labelledby="G26-tab"
                                        tabindex="0">
                                        <p>26. Apakah anak anda mengalami gejala pernafasan terasa cepat ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G026" id="G026" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G026" class="G026" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G026" class="G026" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-27">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G27-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G27-tab-pane" type="button" role="tab"
                                                        aria-controls="G27-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G27-tab-pane" role="tabpanel" aria-labelledby="G27-tab"
                                        tabindex="0">
                                        <p>27. Apakah anak anda mengalami gejala kulit terasa hangat ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G027" id="G027" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G027" class="G027" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G027" class="G027" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    {{-- <div class="tab-pane fade" id="G21-tab-pane" role="tabpanel" aria-labelledby="G21-tab"
                                        tabindex="0">
                                        <p>21. Apakah anak anda mengalami gejala kelenjar air liur meningkat ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G021" id="G021" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G021" class="G021" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G021" class="G021" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-47">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G47-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G47-tab-pane" type="button" role="tab"
                                                        aria-controls="G47-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div> --}}
                                    <div class="tab-pane fade" id="G47-tab-pane" role="tabpanel" aria-labelledby="G47-tab"
                                        tabindex="0">
                                        <p>47. Apakah anak anda mengalami gejala sakit pada bagian leher ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G047" id="G047" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G047" class="G047" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G047" class="G047" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-48">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G48-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G48-tab-pane" type="button" role="tab"
                                                        aria-controls="G48-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G48-tab-pane" role="tabpanel" aria-labelledby="G48-tab"
                                        tabindex="0">
                                        <p>48. Apakah anak anda mengalami gejala sulit menelan makanan ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G048" id="G048" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G048" class="G048" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G048" class="G048" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-49">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G49-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G49-tab-pane" type="button" role="tab"
                                                        aria-controls="G49-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G49-tab-pane" role="tabpanel" aria-labelledby="G49-tab"
                                        tabindex="0">
                                        <p>49. Apakah anak anda mengalami gejala amandel merah dan bengkak ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G049" id="G049" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G049" class="G049" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G049" class="G049" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G17-tab-pane" role="tabpanel" aria-labelledby="G17-tab"
                                        tabindex="0">
                                        <p>17. Apakah anak anda mengalami gejala mual ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G017" id="G017" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G017" class="G017" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G017" class="G017" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-18">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G18-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G18-tab-pane" type="button" role="tab"
                                                        aria-controls="G18-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden g-44">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G44-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G44-tab-pane" type="button" role="tab"
                                                        aria-controls="G44-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G18-tab-pane" role="tabpanel" aria-labelledby="G18-tab"
                                        tabindex="0">
                                        <p>18. Apakah anak anda mengalami gejala feses cair ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G018" id="G018" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G018" class="G018" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G018" class="G018" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-19">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G19-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G19-tab-pane" type="button" role="tab"
                                                        aria-controls="G19-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden g-21">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G21-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G21-tab-pane" type="button" role="tab"
                                                        aria-controls="G21-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G19-tab-pane" role="tabpanel" aria-labelledby="G19-tab"
                                        tabindex="0">
                                        <p>19. Apakah anak anda mengalami gejala feses encer ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G019" id="G019" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G019" class="G019" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G019" class="G019" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-20">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G20-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G20-tab-pane" type="button" role="tab"
                                                        aria-controls="G20-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G20-tab-pane" role="tabpanel" aria-labelledby="G20-tab"
                                        tabindex="0">
                                        <p>20. Apakah anak anda mengalami gejala buang air besar lebih sering 3x sehari ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G020" id="G020" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G020" class="G020" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G020" class="G020" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G21-tab-pane" role="tabpanel" aria-labelledby="G21-tab"
                                        tabindex="0">
                                        <p>21. Apakah anak anda mengalami gejala kelenjar air liur meningkat ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G021" id="G021" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G021" class="G021" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G021" class="G021" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-22">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G22-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G22-tab-pane" type="button" role="tab"
                                                        aria-controls="G22-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden g-41">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G41-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G41-tab-pane" type="button" role="tab"
                                                        aria-controls="G41-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G22-tab-pane" role="tabpanel" aria-labelledby="G22-tab"
                                        tabindex="0">
                                        <p>22. Apakah anak anda mengalami gejala kram pada perut ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G022" id="G022" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G022" class="G022" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G022" class="G022" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-23">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G23-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G23-tab-pane" type="button" role="tab"
                                                        aria-controls="G23-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G23-tab-pane" role="tabpanel" aria-labelledby="G23-tab"
                                        tabindex="0">
                                        <p>23. Apakah anak anda mengalami gejala keringat dingin secara tiba-tiba ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G023" id="G023" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G023" class="G023" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G023" class="G023" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G41-tab-pane" role="tabpanel" aria-labelledby="G41-tab"
                                        tabindex="0">
                                        <p>41. Apakah anak anda mengalami gejala terdapat cacing pada tinja ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G041" id="G041" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G041" class="G041" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G041" class="G041" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-42">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G42-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G42-tab-pane" type="button" role="tab"
                                                        aria-controls="G42-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G42-tab-pane" role="tabpanel" aria-labelledby="G42-tab"
                                        tabindex="0">
                                        <p>42. Apakah anak anda mengalami gejala adanya darah pada feses ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G042" id="G042" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G042" class="G042" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G042" class="G042" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-43">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G43-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G43-tab-pane" type="button" role="tab"
                                                        aria-controls="G43-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G43-tab-pane" role="tabpanel" aria-labelledby="G43-tab"
                                        tabindex="0">
                                        <p>43. Apakah anak anda mengalami gejala feses keras ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G043" id="G043" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G043" class="G043" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G043" class="G043" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G44-tab-pane" role="tabpanel" aria-labelledby="G44-tab"
                                        tabindex="0">
                                        <p>44. Apakah anak anda mengalami gejala buang air besar kurang dari 2 minggu sekali ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G044" id="G044" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G044" class="G044" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G044" class="G044" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-45">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G45-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G45-tab-pane" type="button" role="tab"
                                                        aria-controls="G45-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden g-35">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G35-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G35-tab-pane" type="button" role="tab"
                                                        aria-controls="G35-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G45-tab-pane" role="tabpanel" aria-labelledby="G45-tab"
                                        tabindex="0">
                                        <p>45. Apakah anak anda mengalami gejala perut terasa penuh ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G045" id="G045" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G045" class="G045" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G045" class="G045" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-47">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G47-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G47-tab-pane" type="button" role="tab"
                                                        aria-controls="G47-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G47-tab-pane" role="tabpanel" aria-labelledby="G47-tab"
                                        tabindex="0">
                                        <p>47. Apakah anak anda mengalami gejala sakit pada bagian leher ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G047" id="G047" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G047" class="G047" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G047" class="G047" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G35-tab-pane" role="tabpanel" aria-labelledby="G35-tab"
                                        tabindex="0">
                                        <p>35. Apakah anak anda mengalami mudah terkena sakit ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G035" id="G035" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G035" class="G035" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G035" class="G035" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-36">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G36-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G36-tab-pane" type="button" role="tab"
                                                        aria-controls="G36-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G36-tab-pane" role="tabpanel" aria-labelledby="G36-tab"
                                        tabindex="0">
                                        <p>36. Apakah anak anda mengalami tubuh anak lebih pendek ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G036" id="G036" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G036" class="G036" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G036" class="G036" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-37">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G37-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G37-tab-pane" type="button" role="tab"
                                                        aria-controls="G37-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G37-tab-pane" role="tabpanel" aria-labelledby="G37-tab"
                                        tabindex="0">
                                        <p>37. Apakah anak anda mengalami gejala gangguan belajar ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G037" id="G037" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G037" class="G037" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G037" class="G037" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-38">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G38-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G38-tab-pane" type="button" role="tab"
                                                        aria-controls="G38-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G38-tab-pane" role="tabpanel" aria-labelledby="G38-tab"
                                        tabindex="0">
                                        <p>38. Apakah anak anda mengalami adanya gangguan tumbuh kembang ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G038" id="G038" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G038" class="G038" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G038" class="G038" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-39">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G39-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G39-tab-pane" type="button" role="tab"
                                                        aria-controls="G39-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G39-tab-pane" role="tabpanel" aria-labelledby="G39-tab"
                                        tabindex="0">
                                        <p>39. Apakah anak anda mengalami pertumbuhan tubuh dan gigi terlambat ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G039" id="G039" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G039" class="G039" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G039" class="G039" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden g-40">
                                            <ul class="nav nav-pills justify-content-center id=" myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="btn btn-success" id="G40-tab" data-bs-toggle="tab"
                                                        data-bs-target="#G40-tab-pane" type="button" role="tab"
                                                        aria-controls="G40-tab-pane" aria-selected="false">Next
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="G40-tab-pane" role="tabpanel" aria-labelledby="G40-tab"
                                        tabindex="0">
                                        <p>40. Apakah anak anda mengalami sakit perut ?</p>
                                        <div class="d-flex gap-5 justify-content-center mt-2 mb-3">
                                            <label class="radio-choice" style="display: none">
                                                <input type="radio" name="G040" id="G040" value="" checked>
                                            </label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G040" class="G040" value="1">Ya</label>
                                            <label class="radio-choice">
                                                <input type="radio" name="G040" class="G040" value="0">Tidak</label>
                                        </div>
                                        <div class="hidden submit">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <div class="hidden notFound">
                                            <p>Mohon maaf, penyakit belum diketahui, mohon untuk mengunjungi ke rumah sakit cabang terdekat untuk pengecekan lebih lanjut.</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('script')

    <script>
        $(document).ready(function() {
            $('.G001').on('change', function() {
                if (this.value === "1") {
                    $(".g-2").show();
                    $(".g-17").hide();
                } else {
                    $(".g-2").hide();
                    $(".g-17").show();
                }
            });

            $('.G002').on('change', function() {
                if (this.value === "1") {
                    $(".g-3").show();
                    $(".g-12").hide();
                } else {
                    $(".g-3").hide();
                    $(".g-12").show();
                }
            });

            $('.G003').on('change', function() {
                if (this.value === "1") {
                    $(".g-4").show();
                    $(".g-29").hide();
                } else {
                    $(".g-4").hide();
                    $(".g-29").show();
                }
            });

            $('.G004').on('change', function() {
                if (this.value === "1") {
                    $(".g-5").show();
                    $(".notFound").hide();
                } else {
                    $(".g-5").hide();
                    $(".notFound").show();
                }
            });
            $('.G005').on('change', function() {
                if (this.value === "1") {
                    $(".g-6").show();
                    $(".notFound").hide();
                } else {
                    $(".g-6").hide();
                    $(".notFound").show();
                }
            });
            $('.G006').on('change', function() {
                if (this.value === "1") {
                    $(".g-7").show();
                    $(".notFound").hide();
                } else {
                    $(".g-7").hide();
                    $(".notFound").show();
                }
            });
            $('.G007').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".notFound").show();
                }
            });
            $('.G012').on('change', function() {
                if (this.value === "1") {
                    $(".g-21").show();
                    $(".g-8").hide();
                } else {
                    $(".g-21").hide();
                    $(".g-8").show();
                }
            });
            $('.G008').on('change', function() {
                if (this.value === "1") {
                    $(".g-9").show();
                    $(".g-24").hide();
                } else {
                    $(".g-9").hide();
                    $(".g-24").show();
                }
            });
            $('.G009').on('change', function() {
                if (this.value === "1") {
                    $(".g-10").show();
                    $(".notFound").hide();
                } else {
                    $(".g-10").hide();
                    $(".g-notFound").show();
                }
            });
            $('.G010').on('change', function() {
                if (this.value === "1") {
                    $(".g-11").show();
                    $(".notFound").hide();
                } else {
                    $(".g-11").hide();
                    $(".g-notFound").show();
                }
            });
            $('.G011').on('change', function() {
                if (this.value === "1") {
                    $(".g-13").show();
                    $(".notFound").hide();
                } else {
                    $(".g-13").hide();
                    $(".g-notFound").show();
                }
            });
            $('.G013').on('change', function() {
                if (this.value === "1") {
                    $(".g-14").show();
                    $(".notFound").hide();
                } else {
                    $(".g-14").hide();
                    $(".g-notFound").show();
                }
            });
            $('.G014').on('change', function() {
                if (this.value === "1") {
                    $(".g-15").show();
                    $(".notFound").hide();
                } else {
                    $(".g-15").hide();
                    $(".g-notFound").show();
                }
            });
            $('.G015').on('change', function() {
                if (this.value === "1") {
                    $(".g-16").show();
                    $(".notFound").hide();
                } else {
                    $(".g-16").hide();
                    $(".g-notFound").show();
                }
            });
            $('.G016').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".g-notFound").show();
                }
            });
            $('.G024').on('change', function() {
                if (this.value === "1") {
                    $(".g-25").show();
                    $(".notFound").hide();
                } else {
                    $(".g-25").hide();
                    $(".notFound").show();
                }
            });
            $('.G025').on('change', function() {
                if (this.value === "1") {
                    $(".g-26").show();
                    $(".notFound").hide();
                } else {
                    $(".g-26").hide();
                    $(".notFound").show();
                }
            });
            $('.G026').on('change', function() {
                if (this.value === "1") {
                    $(".g-27").show();
                    $(".notFound").hide();
                } else {
                    $(".g-27").hide();
                    $(".notFound").show();
                }
            });
            $('.G027').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".notFound").show();
                }
            });
            $('.G047').on('change', function() {
                if (this.value === "1") {
                    $(".g-48").show();
                    $(".notFound").hide();
                } else {
                    $(".g-48").hide();
                    $(".notFound").show();
                }
            });
            $('.G048').on('change', function() {
                if (this.value === "1") {
                    $(".g-49").show();
                    $(".notFound").hide();
                } else {
                    $(".g-49").hide();
                    $(".notFound").show();
                }
            });
            $('.G049').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".notFound").show();
                }
            });
            $('.G029').on('change', function() {
                if (this.value === "1") {
                    $(".g-30").show();
                    $(".notFound").hide();
                } else {
                    $(".g-30").hide();
                    $(".notFound").show();
                }
            });
            $('.G030').on('change', function() {
                if (this.value === "1") {
                    $(".g-31").show();
                    $(".notFound").hide();
                } else {
                    $(".g-31").hide();
                    $(".notFound").show();
                }
            });
            $('.G031').on('change', function() {
                if (this.value === "1") {
                    $(".g-32").show();
                    $(".notFound").hide();
                } else {
                    $(".g-32").hide();
                    $(".notFound").show();
                }
            });
            $('.G032').on('change', function() {
                if (this.value === "1") {
                    $(".g-33").show();
                    $(".notFound").hide();
                } else {
                    $(".g-33").hide();
                    $(".notFound").show();
                }
            });
            $('.G033').on('change', function() {
                if (this.value === "1") {
                    $(".g-34").show();
                    $(".notFound").hide();
                } else {
                    $(".g-34").hide();
                    $(".notFound").show();
                }
            });
            $('.G034').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".notFound").show();
                }
            });
            $('.G017').on('change', function() {
                if (this.value === "1") {
                    $(".g-18").show();
                    $(".g-44").hide();
                } else {
                    $(".g-18").hide();
                    $(".g-44").show();
                }
            });
            $('.G018').on('change', function() {
                if (this.value === "1") {
                    $(".g-19").show();
                    $(".g-21").hide();
                } else {
                    $(".g-19").hide();
                    $(".g-21").show();
                }
            });
            $('.G019').on('change', function() {
                if (this.value === "1") {
                    $(".g-20").show();
                    $(".notFound").hide();
                } else {
                    $(".g-20").hide();
                    $(".notFound").show();
                }
            });
            $('.G020').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".notFound").show();
                }
            });
            $('.G021').on('change', function() {
                if (this.value === "1") {
                    $(".g-22").show();
                    $(".g-41").hide();
                } else {
                    $(".g-22").hide();
                    $(".g-41").show();
                }
            });
            $('.G022').on('change', function() {
                if (this.value === "1") {
                    $(".g-23").show();
                    $(".notFound").hide();
                } else {
                    $(".g-23").hide();
                    $(".notFound").show();
                }
            });
            $('.G023').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".notFound").show();
                }
            });
            $('.G041').on('change', function() {
                if (this.value === "1") {
                    $(".g-42").show();
                    $(".notFound").hide();
                } else {
                    $(".g-42").hide();
                    $(".notFound").show();
                }
            });
            $('.G042').on('change', function() {
                if (this.value === "1") {
                    $(".g-43").show();
                    $(".notFound").hide();
                } else {
                    $(".g-43").hide();
                    $(".notFound").show();
                }
            });
            $('.G043').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".notFound").show();
                }
            });
            $('.G044').on('change', function() {
                if (this.value === "1") {
                    $(".g-45").show();
                    $(".g-35").hide();
                } else {
                    $(".g-45").hide();
                    $(".g-35").show();
                }
            });
            $('.G045').on('change', function() {
                if (this.value === "1") {
                    $(".g-47").show();
                    $(".notFound").hide();
                } else {
                    $(".g-47").hide();
                    $(".notFound").show();
                }
            });
            $('.G047').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".notFound").show();
                }
            });
            $('.G035').on('change', function() {
                if (this.value === "1") {
                    $(".g-36").show();
                    $(".notFound").hide();
                } else {
                    $(".g-36").hide();
                    $(".notFound").show();
                }
            });
            $('.G036').on('change', function() {
                if (this.value === "1") {
                    $(".g-37").show();
                    $(".notFound").hide();
                } else {
                    $(".g-37").hide();
                    $(".notFound").show();
                }
            });
            $('.G037').on('change', function() {
                if (this.value === "1") {
                    $(".g-38").show();
                    $(".notFound").hide();
                } else {
                    $(".g-38").hide();
                    $(".notFound").show();
                }
            });
            $('.G038').on('change', function() {
                if (this.value === "1") {
                    $(".g-39").show();
                    $(".notFound").hide();
                } else {
                    $(".g-39").hide();
                    $(".notFound").show();
                }
            });
            $('.G039').on('change', function() {
                if (this.value === "1") {
                    $(".g-40").show();
                    $(".notFound").hide();
                } else {
                    $(".g-40").hide();
                    $(".notFound").show();
                }
            });
            $('.G040').on('change', function() {
                if (this.value === "1") {
                    $(".submit").show();
                    $(".notFound").hide();
                } else {
                    $(".submit").hide();
                    $(".notFound").show();
                }
            });

        });

    </script>
@endpush
