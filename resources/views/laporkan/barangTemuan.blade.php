@extends('layouts.main')
@section('container')
@include('sweetalert::alert')

<div class="container-xxl py-5">
    <div class="container">
        <center>
            <h1><b>Laporkan Barang Temuan</b></h1>
            </center> <br><br><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum debitis pariatur fugiat soluta voluptatum ab ea voluptate, deserunt porro rerum eaque quidem laudantium delectus quis incidunt architecto exercitationem quasi ratione doloribus mollitia totam tenetur. Tenetur fugit fuga obcaecati. Vero, ipsum cupiditate iste sequi, quidem vitae pariatur laboriosam, quas magni voluptatum quo quae commodi dolore! Placeat eveniet atque porro voluptas qui optio molestiae ipsum accusamus laudantium voluptatibus doloremque ad fugit ipsam commodi rem aliquam dolores facilis, autem nostrum. Perferendis ex dignissimos adipisci aperiam dicta quis tenetur ea porro iure sequi perspiciatis dolorem, atque dolore accusamus quos ipsa maiores quaerat obcaecati harum, consectetur, reprehenderit debitis eligendi illum. Minima nemo adipisci esse et pariatur accusamus ad ea ab sint, praesentium laboriosam doloribus expedita atque facilis non recusandae mollitia doloremque numquam accusantium cupiditate? Quas obcaecati natus autem minus eos vitae laudantium voluptas ea? Voluptas velit beatae quaerat omnis eveniet illo, consequatur harum est officiis minima corporis deserunt aspernatur distinctio quo. Maxime at ut nemo exercitationem neque distinctio possimus, error iure sit ducimus quis atque itaque officia perspiciatis. Provident temporibus eum labore ipsam magnam optio natus possimus voluptatem fuga quam, voluptatibus fugit. Dignissimos, impedit tempore pariatur nam quis, nihil dicta neque aliquam labore esse ut voluptates asperiores, maiores praesentium rerum commodi corrupti totam? Sed maxime iste autem modi sapiente doloribus quisquam vitae error necessitatibus, incidunt, tempore beatae, dolorum atque hic? Eum rerum ex accusamus, expedita laudantium pariatur quam perspiciatis a ab commodi odit aperiam rem beatae. Iure, aut velit eum facere repudiandae ex ducimus facilis dolore asperiores deleniti, tempore ut reprehenderit, sequi ipsam iusto ipsum! Repudiandae fugiat ad rem cum nisi placeat voluptatibus provident voluptates quae maxime temporibus aliquid distinctio aliquam ut nesciunt nostrum dolore officia accusantium, alias voluptate neque. Debitis officia ducimus dolorem tenetur veniam corrupti ut eaque, nesciunt facilis eos ab iste sint?</p>
    </div>
</div>

<div class="container">
<div class="table-wrapper">
        <form action="{{route('temuan.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nama barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="nama_barang">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="noHp" class="col-sm-2 col-form-label">No. Telepon</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="noHp" name="no_tel">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="location" class="col-sm-2 col-form-label">Lokasi Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="location" name="lokasi">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="time" class="col-sm-2 col-form-label">Waktu Kehilangan</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="time" name="tanggal">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Ciri - ciri</label>
                    <div class="col-sm-10">
                        <textarea id="detail" name="deskripsi" cols="108" rows="5" style="border-radius:10px;"></textarea>
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Foto barang</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="file" id="image" name="gambar">
                    </div>
            </div><br>
            <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori Barang</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kategori" id="kategori">
                        @foreach($kategori as $k)
                            <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary" style="border-radius:15px ;">Submit</button>
        </form>	
        </div>
    </div>


@endsection