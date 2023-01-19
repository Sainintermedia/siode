@extends('layouts.surat.legalsurat')
@section('title', 'Surat Keterangan Tidak Mampu')
@section('content')
    {{-- <table> --}}
        <table border="0" align="center"> 
            <tr>
        <td><img src="{{('image/kab1.jpg')}}"></td>
        <td align="center"><font size="4" >PEMERINTAH KABUPATEN TANGERANG</font><BR>
            <font size="4">KECAMATAN JAYANTI</font><BR>
            <font size="5" class="think" >SEKRETARIS DESA SUMURBANDUNG</font><BR>
            <font size="2"><i>Alamat : Jl. Raya Serang KM. 32 Desa. Sumurbandung Kec. Jayanti Kab. Tangerang Kode Pos: 15610</i></font><BR>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr></td>
        </tr>
        <tr>
            <td colspan="3" align="center" ><font size="5" class="thick"><u>SURAT PENGANTAR</u></font></td>
        </tr>
        <br>
        <br>     
        <tr>
            <td colspan="2"><font size="3">Yang bertanda tangan di bawah ini, Kepala Desa Sumurbandung Kecamatan Jayanti Kabupaten Tangerang,<br> menerangkan bahwa </font></td>
        </tr>
        </table>
 
        <table width="500" align="center" border="0">
            <tr>
                <td width="100"><font size="3">Nama</font></td>
                <td width="400"><font size="3"> : </font></td> 
                {{-- {{ $familycards->nama }} --}}
            </tr>
            <tr>
                <td  width="200"><font size="3">Tempat, Tgl Lahir</font></td>
                <td width="200"><font size="3"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="3">Jenis Kelamin</font></td>
                <td width="100"><font size="3"> : </font></td>
            </tr>
            <tr>
                <td width="100"><font size="3">Warganegara</font></td>
                <td width="100"><font size="3"> :  </font></td>
            </tr>
            <tr>
                <td width="100"><font size="3">Agama</font></td>
                <td width="100"><font size="3"> :  </font></td>
            </tr>
            <tr>
                <td width="100"><font size="3">Pekerjaan</font></td>
                <td width="100"><font size="3"> : </font></td>
            </tr>
            <tr>
                <td width="100"><font size="3">Alamat</font></td>
                <td width="100"><font size="3"> : </font></td>
            </tr>
            <br>
            <tr>
        </table>
        <br>
        <table  width="700" border="0" align="center"> 
            <tr>
                <td colspan="2"><font size="3">         Bahwa benar nama tersebut diatas menurut keterangan RT/RW setempat pada saat ini berdomisili di alamat tersebut diatas.
                    Surat pengantar ini diberikan untuk keperluan pembuatan
                    <b>SKCK</b>.</font></td>
            </tr>
        </table>
        <br>
        <table  width="700" border="0" align="center"> 
            <tr>
                <td colspan="2"><font size="3">        Demikian surat keterangan ini dibuat dengan sebenar-benarnya untuk dapat
                    dipergunakan <br>sebagaimana mestinya</font></td>
            </tr>
        </table>
       <br>
    <table width="600" border="0">
        <br>
        <br>
        <tr>
            <td  colspan="2" align="right" ><font size="3">Kepala Nama Kepala Desa</font></td>
        </tr>
        <tr>
            <td height="30" colspan="2"></td>
        </tr>
    </table>
@endsection

@push('styles')
    <script></script>
@endpush

@push('scripts')
    <script type="text/javascript"></script>
@endpush
