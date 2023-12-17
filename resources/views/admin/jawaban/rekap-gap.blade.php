@if (
    (!empty($TataPamong['tangibles']['gap']) ||
    !empty($TataPamong['reliability']['gap']) ||
    !empty($TataPamong['responsiveness']['gap']) ||
    !empty($TataPamong['assurance']['gap']) ||
    !empty($TataPamong['empathy']['gap'])) &&
    ($layanan == 'tataPamong' || $layanan == 'semua')
)
    @include('admin.jawaban.gap.tataPamong')
@endif
@if (
    (!empty($Kemahasiswaan['tangibles']['gap']) ||
    !empty($Kemahasiswaan['reliability']['gap']) ||
    !empty($Kemahasiswaan['responsiveness']['gap']) ||
    !empty($Kemahasiswaan['assurance']['gap']) ||
    !empty($Kemahasiswaan['empathy']['gap']) ) &&
    ($layanan == 'kemahasiswaan' || $layanan == 'semua')
)
    @include('admin.jawaban.gap.kemahasiswaan')
@endif
@if (
    (!empty($SaranaPrasana['tangibles']['gap']) ||
    !empty($SaranaPrasana['reliability']['gap']) ||
    !empty($SaranaPrasana['responsiveness']['gap']) ||
    !empty($SaranaPrasana['assurance']['gap']) ||
    !empty($SaranaPrasana['empathy']['gap'])) &&
    ($layanan == 'saranaPrasana' || $layanan == 'semua')
)
    @include('admin.jawaban.gap.saranaPrasana')
@endif
@if (
    (!empty($Keuangan['tangibles']['gap']) ||
    !empty($Keuangan['reliability']['gap']) ||
    !empty($Keuangan['responsiveness']['gap']) ||
    !empty($Keuangan['assurance']['gap']) ||
    !empty($Keuangan['empathy']['gap']) ) &&
    ($layanan == 'keuangan' || $layanan == 'semua')
)
    @include('admin.jawaban.gap.keuangan')
@endif
@if (
    (!empty($Pendidikan['tangibles']['gap']) ||
    !empty($Pendidikan['reliability']['gap']) ||
    !empty($Pendidikan['responsiveness']['gap']) ||
    !empty($Pendidikan['assurance']['gap']) ||
    !empty($Pendidikan['empathy']['gap']) ) &&
    ($layanan == 'pendidikan' || $layanan == 'semua')
)
    @include('admin.jawaban.gap.pendidikan')
@endif
@if (
    (!empty($Penelitian['tangibles']['gap']) ||
    !empty($Penelitian['reliability']['gap']) ||
    !empty($Penelitian['responsiveness']['gap']) ||
    !empty($Penelitian['assurance']['gap']) ||
    !empty($Penelitian['empathy']['gap']) ) &&
    ($layanan == 'penelitian' || $layanan == 'semua')
)
    @include('admin.jawaban.gap.penelitian')
@endif