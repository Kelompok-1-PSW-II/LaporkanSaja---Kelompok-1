<?php
use App\Models\Hilang;
use App\Models\Temuan;
use App\Models\Kategori;
class Helper{
    public static function Category(){
        $kategori = new Kategori();
        // dd($kategori);
        $menu=$kategori->getAllCatagory(); 
        if($menu){
            ?>
                <li><a href="{{url('/cariHilang')}}">Semua Barang</a></li>
                <?php
                    foreach($menu as $cat_info){
                            ?>
                            <li><a class="nav-link" href="<?php echo route('cariHilang',$cat_info->slug); ?>"><?php echo $cat_info->nama_kategori; ?></a>
                            </li>
                            <?php
                    }
                    ?>
        <?php
        }
    }
    public static function Category1(){
        $kategori = new Kategori();
        // dd($kategori);
        $menu=$kategori->getAllCatagory(); 
        if($menu){
            ?>
            <li><a href="{{url('/cariHilang')}}">Semua Barang</a></li>
                <?php
                    foreach($menu as $cat_info){
                            ?>
                            <li><a href="<?php echo route('ambilTemuan',$cat_info->slug); ?>"><?php echo $cat_info->nama_kategori; ?></a>
                            </li>
                            <?php
                    }
                    ?>
        <?php
        }
    }
}