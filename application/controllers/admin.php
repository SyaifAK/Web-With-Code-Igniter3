<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function index()
	{
		$data['jual'] = $this->M_transaksi->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('main', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_data()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$id_barang = $this->input->post('id_barang');
		$QTY = $this->input->post('QTY');
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'id_barang' => $id_barang,
			'QTY' => $QTY,
		);
		$this->M_transaksi->input_data($data);
		redirect('admin/index');
	}

	public function hapus($id)
	{
		$where = array('id' => $id,);
		$this->M_transaksi->hapus_data($where, 'tb_transaksi');
		redirect('admin/index');
	}

	public function edit($id){
		$where = array('id' => $id , );
		$data['jual']=$this->M_transaksi->edit_data($where, 'tb_transaksi');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$id_barang = $this->input->post('id_barang');
		$QTY = $this->input->post('QTY');
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'id_barang' => $id_barang,
			'QTY' => $QTY,
		);
		$where = array('id' =>$id , );
		$this->M_transaksi->update_data($where, $data,'tb_transaksi');
		redirect('admin/index');
	}

	public function print(){
		$data['jual'] = $this->M_transaksi->tampil_data()->result();
		$this->load->view('print_penjualan',$data);
	}
}
