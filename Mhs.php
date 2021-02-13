<?php
/**
 *
 */
class Mhs extends Civitas
{
  private $nim;

  function __construct($nim)
  {
    $this->nim=$nim;
    $this->initMahasiswa();
  }

  public function getNim()
  {
    return $this->nim;
  }

  public function getNama()
  {
    return $this->nama;
  }

  private function initMahasiswa()
  {
    $listmhs = new Daftar_mahasiswa();
    $mhs = $listmhs->getMahasiswaByNIM($this->nim);

    $this->nama = $mhs['nama'];
  }

}

 ?>
