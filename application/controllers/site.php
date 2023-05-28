<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller
{


    public function index()
    {

        $data['content']    = 'home';
        $this->load->view('index', $data);
    }

    public function lihat_data_karyawan()
    {
        $data['data']        = $this->db->get('tbl_karyawan');
        $data['content']    = 'karyawan/lihat_data_karyawan';
        $this->load->view('index', $data);
    }

    public function tambah_data_karyawan()
    {
        $data['content']    = 'karyawan/tambah_data_karyawan';
        $this->load->view('index', $data);
    }

    public function proses_add_karyawan()
    {
        $nik                = $this->input->post('nik');
        $nama                = $this->input->post('nama');
        $alamat                = $this->input->post('alamat');
        $no_hp                = $this->input->post('no_hp');
        $tanggal_masuk        = $this->input->post('tanggal_masuk');
        $tanggal_keluar        = $this->input->post('tanggal_keluar');
        $jabatan            = $this->input->post('jabatan');

        $data = array(
            'nik'              => $nik,
            'nama'             => $nama,
            'alamat'             => $alamat,
            'no_hp'             => $no_hp,
            'tanggal_keluar'   => $tanggal_keluar,
            'tanggal_masuk'    => $tanggal_masuk,
            'jabatan'          => $jabatan
        );
        $this->db->insert('tbl_karyawan', $data);
        redirect('site/lihat_data_karyawan');
    }
    public function edit_karyawan($id_karyawan)
    {
        $data['data']                 = $this->db->query("SELECT * FROM tbl_karyawan where id_karyawan='$id_karyawan'");
        $data['content']    = 'karyawan/edit_data_karyawan';
        $this->load->view('index', $data);
    }
    public function proses_edit_karyawan()
    {
        $id_karyawan                = $this->input->post('id_karyawan');
        $nik                = $this->input->post('nik');
        $nama                = $this->input->post('nama');
        $alamat                = $this->input->post('alamat');
        $no_hp                = $this->input->post('no_hp');
        $tanggal_masuk        = $this->input->post('tanggal_masuk');
        $tanggal_keluar        = $this->input->post('tanggal_keluar');
        $jabatan            = $this->input->post('jabatan');

        $data = array(
            'nik'              => $nik,
            'nama'             => $nama,
            'alamat'             => $alamat,
            'no_hp'             => $no_hp,
            'tanggal_keluar'   => $tanggal_keluar,
            'tanggal_masuk'    => $tanggal_masuk,
            'jabatan'          => $jabatan
        );
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->update('tbl_karyawan', $data);
        redirect('site/lihat_data_karyawan');
    }
    public function hapus_karyawan($id_karyawan)
    {
        $data['data']                 = $this->db->query("DELETE  FROM tbl_karyawan where id_karyawan='$id_karyawan'");
        redirect('site/lihat_data_karyawan');
    }


    /*KLIEN*/


    public function tambah_data_klien()
    {
        $data['content']    = 'klien/tambah_data_klien';
        $this->load->view('index', $data);
    }

    public function proses_add_klien()
    {
        $nama                = $this->input->post('nama');
        $alamat                = $this->input->post('alamat');
        $no_hp                = $this->input->post('no_hp');
        $email                = $this->input->post('email');
        $tgl_gabung        = $this->input->post('tgl_gabung');

        $data = array(
            'nama_klien'              => $nama,
            'alamat'             => $alamat,
            'no_hp'             => $no_hp,
            'email'               => $email,
            'tgl_gabung'    => $tgl_gabung
        );
        $this->db->insert('tbl_klien', $data);
        redirect('site/lihat_data_klien');
    }

    public function lihat_data_klien()
    {
        $data['data']        = $this->db->get('tbl_klien');
        $data['content']    = 'klien/lihat_data_klien';
        $this->load->view('index', $data);
    }
    public function edit_klien($id_klien)
    {
        $data['data']                 = $this->db->query("SELECT * FROM tbl_klien where id_klien='$id_klien'");
        $data['content']    = 'klien/edit_data_klien';
        $this->load->view('index', $data);
    }
    public function proses_edit_klien()
    {
        $id_klien                = $this->input->post('id_klien');
        $nama                = $this->input->post('nama');
        $alamat                = $this->input->post('alamat');
        $no_hp                = $this->input->post('no_hp');
        $email                = $this->input->post('email');
        $tgl_gabung        = $this->input->post('tgl_gabung');

        $data = array(
            'nama_klien'              => $nama,
            'alamat'             => $alamat,
            'no_hp'             => $no_hp,
            'email'               => $email,
            'tgl_gabung'    => $tgl_gabung
        );
        $this->db->where('id_klien', $id_klien);
        $this->db->update('tbl_klien', $data);
        redirect('site/lihat_data_klien');
    }

    public function hapus_klien($id_klien)
    {
        $data['data']                 = $this->db->query("DELETE  FROM tbl_klien where id_klien='$id_klien'");
        redirect('site/lihat_data_klien');
    }




    /*PROJECT*/

    public function tambah_data_project()
    {
        $data['content']    = 'project/tambah_data_project';
        $this->load->view('index', $data);
    }

    public function proses_add_project()
    {
        $id_karyawan            = $this->input->post('id_karyawan');
        $id_klien                = $this->input->post('id_klien');
        $nama_project            = $this->input->post('project');
        $jenis                    = $this->input->post('jenis');
        $tanggal_mulai            = $this->input->post('tanggal_mulai');
        $tanggal_selesai        = $this->input->post('tanggal_selesai');
        $harga                    = $this->input->post('harga');
        $dp                        = $this->input->post('dp');
        $selesai_dp                = $this->input->post('selesai_dp');
        $selesai_project        = $this->input->post('selesai_project');

        $data = array(
            'id_karyawan'        => $id_karyawan,
            'id_klien'           => $id_klien,
            'nama_project'       => $nama_project,
            'jenis'              => $jenis,
            'tanggal_mulai'      => $tanggal_mulai,
            'tanggal_selesai'    => $tanggal_selesai,
            'harga'              => $harga,
            'dp'                   => $dp,
            'selesai_dp'         => $selesai_dp,
            'selesai_project'    => $selesai_project
        );
        $this->db->insert('tbl_project', $data);
        redirect('site/lihat_data_project');
    }

    public function lihat_data_project()
    {
        $data['data']        = $this->db->query("SELECT * FROM tbl_project left join (tbl_klien,tbl_karyawan) on tbl_project.id_klien=tbl_klien.id_klien and tbl_project.id_karyawan=tbl_karyawan.id_karyawan");
        $data['content']    = 'project/lihat_data_project';
        $this->load->view('index', $data);
    }

    public function edit_project($id_project)
    {
        $data['data']                 = $this->db->query("SELECT * FROM tbl_project left join (tbl_klien,tbl_karyawan) on tbl_project.id_klien=tbl_klien.id_klien and tbl_project.id_karyawan=tbl_karyawan.id_karyawan where tbl_project.id_project='$id_project'");
        $data['content']    = 'project/edit_data_project';
        $this->load->view('index', $data);
    }

    public function proses_edit_project()
    {
        $id_project            = $this->input->post('id_project');
        $id_karyawan            = $this->input->post('id_karyawan');
        $id_klien                = $this->input->post('id_klien');
        $nama_project            = $this->input->post('project');
        $jenis                    = $this->input->post('jenis');
        $tanggal_mulai            = $this->input->post('tanggal_mulai');
        $tanggal_selesai        = $this->input->post('tanggal_selesai');
        $harga                    = $this->input->post('harga');
        $dp                        = $this->input->post('dp');
        $selesai_dp                = $this->input->post('selesai_dp');
        $selesai_project        = $this->input->post('selesai_project');
        $status            = $this->input->post('status');

        $data = array(
            'id_karyawan'        => $id_karyawan,
            'id_klien'           => $id_klien,
            'nama_project'       => $nama_project,
            'jenis'              => $jenis,
            'tanggal_mulai'      => $tanggal_mulai,
            'tanggal_selesai'    => $tanggal_selesai,
            'harga'              => $harga,
            'dp'                   => $dp,
            'selesai_dp'         => $selesai_dp,
            'selesai_project'    => $selesai_project,
            'status'    => $status
        );
        $this->db->where('id_project', $id_project);
        $this->db->update('tbl_project', $data);
        redirect('site/lihat_data_project');
    }

    public function hapus_project($id_project)
    {
        $data['data']                 = $this->db->query("DELETE  FROM tbl_project where id_project='$id_project'");
        redirect('site/lihat_data_project');
    }



    /*PEMASUKAN*/


    public function tambah_data_pemasukan()
    {
        $data['content']    = 'pemasukan/tambah_data_pemasukan';
        $this->load->view('index', $data);
    }

    public function proses_add_pemasukan()
    {
        $id_project                = $this->input->post('id_project');
        $tanggal                = $this->input->post('tanggal');
        $data = array(
            'id_project'       => $id_project,
            'tanggal'             => $tanggal
        );
        $this->db->insert('tbl_pemasukan', $data);
        redirect('site/lihat_data_pemasukan');
    }

    public function lihat_data_pemasukan()
    {
        $data['data']        = $this->db->query("SELECT * FROM tbl_pemasukan left join tbl_project on tbl_pemasukan.id_project=tbl_project.id_project ");
        $data['content']    = 'pemasukan/lihat_data_pemasukan';
        $this->load->view('index', $data);
    }
    public function edit_pemasukan($id_pemasukan)
    {
        $data['data']                 = $this->db->query("SELECT * FROM tbl_pemasukan left join tbl_project on tbl_pemasukan.id_project=tbl_project.id_project where tbl_pemasukan.id_pemasukan='$id_pemasukan'");
        $data['content']    = 'pemasukan/edit_data_pemasukan';
        $this->load->view('index', $data);
    }
    public function proses_edit_pemasukan()
    {
        $id_pemasukan                = $this->input->post('id_pemasukan');
        $id_project                = $this->input->post('id_project');
        $tanggal                = $this->input->post('tanggal');
        $data = array(
            'id_project'       => $id_project,
            'tanggal'             => $tanggal
        );
        $this->db->where('id_pemasukan', $id_pemasukan);
        $this->db->update('tbl_pemasukan', $data);
        redirect('site/lihat_data_pemasukan');
    }
    public function hapus_pemasukan($id_pemasukan)
    {
        $data['data']                 = $this->db->query("DELETE  FROM tbl_pemasukan where id_pemasukan='$id_pemasukan'");
        redirect('site/lihat_data_pemasukan');
    }


    /*PENGELUARAN*/


    public function tambah_data_pengeluaran()
    {
        $data['content']    = 'pengeluaran/tambah_data_pengeluaran';
        $this->load->view('index', $data);
    }

    public function proses_add_pengeluaran()
    {
        $pengeluaran                = $this->input->post('pengeluaran');
        $total                        = $this->input->post('total');
        $data = array(
            'pengeluaran'       => $pengeluaran,
            'total'             => $total
        );
        $this->db->insert('tbl_pengeluaran', $data);
        redirect('site/lihat_data_pengeluaran');
    }

    public function lihat_data_pengeluaran()
    {
        $data['data']        = $this->db->query("SELECT * FROM tbl_pengeluaran ");
        $data['content']    = 'pengeluaran/lihat_data_pengeluaran';
        $this->load->view('index', $data);
    }
    public function edit_pengeluaran($id_pengeluaran)
    {
        $data['data']        = $this->db->query("SELECT * FROM tbl_pengeluaran where id_pengeluaran='$id_pengeluaran' ");
        $data['content']    = 'pengeluaran/edit_data_pengeluaran';
        $this->load->view('index', $data);
    }
    public function proses_edit_pengeluaran()
    {
        $id_pengeluaran                = $this->input->post('id_pengeluaran');
        $pengeluaran                = $this->input->post('pengeluaran');
        $total                        = $this->input->post('total');
        $data = array(
            'pengeluaran'       => $pengeluaran,
            'total'             => $total
        );
        $this->db->where('id_pengeluaran', $id_pengeluaran);
        $this->db->update('tbl_pengeluaran', $data);
        redirect('site/lihat_data_pengeluaran');
    }
    public function hapus_pengeluaran($id_pengeluaran)
    {
        $data['data']                 = $this->db->query("DELETE  FROM tbl_pengeluaran where id_pengeluaran='$id_pengeluaran'");
        redirect('site/lihat_data_pengeluaran');
    }


    /*GAJI*/


    public function tambah_data_penggajian()
    {
        $data['content']    = 'penggajian/tambah_data_penggajian';
        $this->load->view('index', $data);
    }

    public function proses_add_pengajian()
    {
        $id_karyawan            = $this->input->post('id_karyawan');
        $hari_kerja                = $this->input->post('hari_kerja');
        $total_gaji                = $this->input->post('total_gaji');
        $jumlah_project                        = $this->input->post('jumlah_project');
        $data = array(
            'id_karyawan'       => $id_karyawan,
            'hari_kerja'             => $hari_kerja,
            'total_gaji'             => $total_gaji,
            'jumlah_project'             => $jumlah_project
        );
        $this->db->insert('tbl_gaji', $data);
        redirect('site/lihat_data_penggajian');
    }

    public function lihat_data_penggajian()
    {
        $data['data']        = $this->db->query("SELECT * FROM tbl_gaji left join tbl_karyawan on tbl_gaji.id_karyawan=tbl_karyawan.id_karyawan ");
        $data['content']    = 'penggajian/lihat_data_penggajian';
        $this->load->view('index', $data);
    }

    public function edit_penggajian($id_gaji)
    {
        $data['data']        = $this->db->query("SELECT * FROM tbl_gaji left join tbl_karyawan on tbl_gaji.id_karyawan=tbl_karyawan.id_karyawan where tbl_gaji.id_gaji='$id_gaji' ");
        $data['content']    = 'penggajian/edit_data_penggajian';
        $this->load->view('index', $data);
    }
    public function proses_edit_pengajian()
    {
        $id_gaji            = $this->input->post('id_gaji');
        $id_karyawan            = $this->input->post('id_karyawan');
        $hari_kerja                = $this->input->post('hari_kerja');
        $total_gaji                = $this->input->post('total_gaji');
        $jumlah_project                        = $this->input->post('jumlah_project');
        $data = array(
            'id_karyawan'       => $id_karyawan,
            'hari_kerja'             => $hari_kerja,
            'total_gaji'             => $total_gaji,
            'jumlah_project'             => $jumlah_project
        );
        $this->db->where('id_gaji', $id_gaji);
        $this->db->update('tbl_gaji', $data);
        redirect('site/lihat_data_penggajian');
    }
    public function hapus_penggajian($id_gaji)
    {
        $data['data']                 = $this->db->query("DELETE  FROM tbl_gaji where id_gaji='$id_gaji'");
        redirect('site/lihat_data_penggajian');
    }




    /*DEBIT*/
    public function tambah_data_debit()
    {
        $data['content']    = 'debit/tambah_data_debit';
        $this->load->view('index', $data);
    }

    public function proses_add_debit()
    {
        $jumlah_project            = $this->input->post('jumlah_project');
        $total_pemasukan        = $this->input->post('total_pemasukan');
        $total_pengeluaran        = $this->input->post('total_pengeluaran');
        $total_bersih           = $total_pemasukan - $total_pengeluaran;
        $tanggal                = $this->input->post('tanggal');
        $data = array(
            'jumlah_project'       => $jumlah_project,
            'total_pemasukan'             => $total_pemasukan,
            'total_pengeluaran'             => $total_pengeluaran,
            'total_bersih'             => $total_bersih,
            'tanggal'             => $tanggal
        );
        $this->db->insert('tbl_debit', $data);
        redirect('site/lihat_data_debit');
    }

    public function lihat_data_debit()
    {
        $data['data']        = $this->db->query("SELECT * FROM tbl_debit");
        $data['content']    = 'debit/lihat_data_debit';
        $this->load->view('index', $data);
    }
    public function edit_debit($id_debit)
    {
        $data['data']        = $this->db->query("SELECT * FROM tbl_debit where id_debit='$id_debit' ");
        $data['content']    = 'debit/edit_data_debit';
        $this->load->view('index', $data);
    }
    public function proses_edit_debit()
    {
        $id_debit                = $this->input->post('id_debit');
        $jumlah_project            = $this->input->post('jumlah_project');
        $total_pemasukan        = $this->input->post('total_pemasukan');
        $total_pengeluaran        = $this->input->post('total_pengeluaran');
        $total_bersih           = $total_pemasukan - $total_pengeluaran;
        $tanggal                = $this->input->post('tanggal');
        $data = array(
            'jumlah_project'       => $jumlah_project,
            'total_pemasukan'             => $total_pemasukan,
            'total_pengeluaran'             => $total_pengeluaran,
            'total_bersih'             => $total_bersih,
            'tanggal'             => $tanggal
        );
        $this->db->where('id_debit', $id_debit);
        $this->db->update('tbl_debit', $data);
        redirect('site/lihat_data_debit');
    }
    public function hapus_debit($id_debit)
    {
        $data['data']                 = $this->db->query("DELETE  FROM tbl_debit where id_debit='$id_debit'");
        redirect('site/lihat_data_debit');
    }





    /*PROJECT*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */