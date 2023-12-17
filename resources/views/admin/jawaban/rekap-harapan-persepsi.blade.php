@if (
    !empty($TataPamong['tangibles']['harapan']) ||
    !empty($TataPamong['reliability']['harapan']) ||
    !empty($TataPamong['responsiveness']['harapan']) ||
    !empty($TataPamong['assurance']['harapan']) ||
    !empty($TataPamong['empathy']['harapan']) 
)
    @include('admin.jawaban.harapan-persepsi.tataPamong')
@endif
@if (
    !empty($Kemahasiswaan['tangibles']['harapan']) ||
    !empty($Kemahasiswaan['reliability']['harapan']) ||
    !empty($Kemahasiswaan['responsiveness']['harapan']) ||
    !empty($Kemahasiswaan['assurance']['harapan']) ||
    !empty($Kemahasiswaan['empathy']['harapan']) 
)
    @include('admin.jawaban.harapan-persepsi.kemahasiswaan')
@endif
@if (
    !empty($SaranaPrasana['tangibles']['harapan']) ||
    !empty($SaranaPrasana['reliability']['harapan']) ||
    !empty($SaranaPrasana['responsiveness']['harapan']) ||
    !empty($SaranaPrasana['assurance']['harapan']) ||
    !empty($SaranaPrasana['empathy']['harapan']) 
)
    @include('admin.jawaban.harapan-persepsi.saranaPrasana')
@endif
@if (
    !empty($Keuangan['tangibles']['harapan']) ||
    !empty($Keuangan['reliability']['harapan']) ||
    !empty($Keuangan['responsiveness']['harapan']) ||
    !empty($Keuangan['assurance']['harapan']) ||
    !empty($Keuangan['empathy']['harapan']) 
)
    @include('admin.jawaban.harapan-persepsi.keuangan')
@endif
@if (
    !empty($Pendidikan['tangibles']['harapan']) ||
    !empty($Pendidikan['reliability']['harapan']) ||
    !empty($Pendidikan['responsiveness']['harapan']) ||
    !empty($Pendidikan['assurance']['harapan']) ||
    !empty($Pendidikan['empathy']['harapan']) 
)
    @include('admin.jawaban.harapan-persepsi.pendidikan')
@endif
@if (
    !empty($Penelitian['tangibles']['harapan']) ||
    !empty($Penelitian['reliability']['harapan']) ||
    !empty($Penelitian['responsiveness']['harapan']) ||
    !empty($Penelitian['assurance']['harapan']) ||
    !empty($Penelitian['empathy']['harapan']) 
)
    @include('admin.jawaban.harapan-persepsi.penelitian')
@endif