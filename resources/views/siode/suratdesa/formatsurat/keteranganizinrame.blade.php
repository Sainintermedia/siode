@extends('layouts.surat.legalsurat')
@section('title', 'Surat Keterangan Izin Rame Rame')
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
            <td colspan="3" align="center" ><font size="5" class="thick"><u><b>SURAT KETERANGAN IZIN RAME RAME</b></u></font></td>
        </tr>
        <br>
        <br>     
        </table>
        <table width="700" align="center" border="0">
            <td colspan="2"><font size="3"><p style="text-indent: 45px;">Yang bertanda tangan di bawah ini, Kepala Desa Sumurbandung Kecamatan Jayanti Kabupaten Tangerang, menerangkan bahwa</p></font></td>
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
                <td width="100"><font size="3">Warganegara / Agama</font></td>
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
        </table>
        <table width="700" align="center" border="0">
                <td colspan="2"><font size="3"><p style="text-indent: 45px;">Bahwa benar nama tersebut diatas bermaksud mengadakan rame-rame dalam rangka penyelenggaraan lomba burung berkicau yang akan diselenggarakan pada :</p></font></td>
        </table>
        <table width="500" align="center" border="0">
            <tr>
                <td width="100"><font size="3">Hari</font></td>
                <td width="400"><font size="3"> : </font></td> 
                {{-- {{ $familycards->nama }} --}}
            </tr>
            <tr>
                <td  width="200"><font size="3">Tanggal</font></td>
                <td width="200"><font size="3"> :</font></td>
            </tr>
            <tr>
                <td width="100"><font size="3">Waktu</font></td>
                <td width="100"><font size="3"> : </font></td>
            </tr>
            <tr>
                <td width="100"><font size="3">Tempat</font></td>
                <td width="100"><font size="3"> :  </font></td>
            </tr>
        </table>
        <table  width="700" border="0" align="center"> 
            <tr>
                <td colspan="2"><font size="3">Surat keterangan usaha ini bukan merupakan izin tetap, melainkan dari proses perizinan selanjutnya.</font></td>
            </tr>
        </table>
        <table  width="700" border="0" align="center"> 
            <tr>
                <td colspan="2"><font size="3"><p style="text-indent: 45px;">Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya. Dan kepada pihak yang berkepentingan harap mengetahui.</p></font></td>
            </tr>
        </table>
       <br>
    <table width="600" border="0">
        <br>
        <br>
        <tr>
            <td  colspan="2" align="right" ><font size="3">Mengetahui,<br> Camat Cisoka</font></td> <td  colspan="2" align="right" ><font size="3">Kepala Nama Kepala Desa</font></td>
        </tr>
        <tr>
            <td height="30" colspan="2"></td>
        </tr>
        <tr>
            <td  colspan="2" align="right" ><font size="3">(..........................)</font></td> <td  colspan="2" align="right" ><font size="3">(.............................)</font></td>
        </tr>
    </table>
    <br>
    <table width="600" border="0">
        <br>
        <br>
        <tr>
            <td  colspan="2" align="right" ><font size="3">BABINSA Desa</font></td> <td  colspan="2" align="right" ><font size="3">BINAMAS Desa</font></td>
        </tr>
        <tr>
            <td height="30" colspan="2"></td>
        </tr>
        <tr>
            <td  colspan="2" align="right" ><font size="3">(..........................)</font></td> <td  colspan="2" align="right" ><font size="3">(.............................)</font></td>
        </tr>
    </table>
    <br>
    <table width="600" border="0">
        <br>
        <br>
        <tr>
            <td  colspan="2" align="right" ><font size="3">Danramil Cisoka</font></td> <td  colspan="2" align="right" ><font size="3">Kapolsek Cisoka</font></td>
        </tr>
        <tr>
            <td height="50" colspan="2"></td>
        </tr>
        <tr>
            <td  colspan="2" align="right" ><font size="3">(..........................)</font></td> <td  colspan="2" align="right" ><font size="3">(.............................)</font></td>
        </tr>
    </table>
@endsection

@push('styles')
    <script></script>
@endpush

@push('scripts')
    <script type="text/javascript"></script>
@endpush
