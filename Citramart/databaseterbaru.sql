CREATE TABLE data_akun
  (
    username VARCHAR (16) NOT NULL ,
    password VARCHAR (16) ,
    alamat TEXT ,
    nama  VARCHAR (20) ,
    email VARCHAR (30) ,
    no_hp VARCHAR (16) ,
    foto  VARCHAR (30)
  ) ;
ALTER TABLE data_akun ADD CONSTRAINT data_akun_PK PRIMARY KEY ( username ) ;

CREATE TABLE data_barang
  (
    nama_barang   VARCHAR (20) NOT NULL ,
    jumlah_barang INTEGER ,
    harga         NUMERIC
  ) ;
ALTER TABLE data_barang ADD CONSTRAINT data_barang_PK PRIMARY KEY ( nama_barang ) ;

CREATE TABLE detil_membeli
  (
    nama_barang  VARCHAR (20) NOT NULL ,
    id_transaksi INTEGER NOT NULL ,
    jumlah       INTEGER
  ) ;

CREATE TABLE detil_menginput
  (
    id_input    INTEGER NOT NULL ,
    nama_barang VARCHAR (20) NOT NULL ,
    jumlah      INTEGER
  ) ;

CREATE TABLE membeli
  (
    id_transaksi    INTEGER NOT NULL ,
    jumlah          INTEGER ,
    status          VARCHAR (10) ,
    total_harga     NUMERIC ,
    nomor_pelanggan NUMERIC NOT NULL
  ) ;
ALTER TABLE membeli ADD CONSTRAINT membeli_PK PRIMARY KEY ( id_transaksi ) ;

CREATE TABLE menginput
  (
    id_input      INTEGER NOT NULL ,
    username      VARCHAR (16) NOT NULL ,
    tgl_pembelian DATE ,
    status        VARCHAR (10) ,
    total_harga   NUMERIC ,
    id_supplier   INTEGER NOT NULL
  ) ;
ALTER TABLE menginput ADD CONSTRAINT menginput_PK PRIMARY KEY ( id_input ) ;

CREATE TABLE pelanggan
  ( nomor_pelanggan NUMERIC NOT NULL
  ) ;
ALTER TABLE pelanggan ADD CONSTRAINT pelanggan_PK PRIMARY KEY ( nomor_pelanggan ) ;

CREATE TABLE supplier
  (
    id_supplier   INTEGER NOT NULL ,
    nama_supplier VARCHAR (20)
  ) ;
ALTER TABLE supplier ADD CONSTRAINT supplier_PK PRIMARY KEY ( id_supplier ) ;

ALTER TABLE detil_membeli ADD CONSTRAINT detil_membeli_data_barang_FK FOREIGN KEY ( nama_barang ) REFERENCES data_barang ( nama_barang ) ON DELETE CASCADE ;

ALTER TABLE detil_membeli ADD CONSTRAINT detil_membeli_membeli_FK FOREIGN KEY ( id_transaksi ) REFERENCES membeli ( id_transaksi ) ON DELETE CASCADE ;

ALTER TABLE detil_menginput ADD CONSTRAINT detil_menginput_data_barang_FK FOREIGN KEY ( nama_barang ) REFERENCES data_barang ( nama_barang ) ON DELETE CASCADE ;

ALTER TABLE detil_menginput ADD CONSTRAINT detil_menginput_menginput_FK FOREIGN KEY ( id_input ) REFERENCES menginput ( id_input ) ON DELETE CASCADE ;

ALTER TABLE membeli ADD CONSTRAINT membeliv1_pelanggan_FK FOREIGN KEY ( nomor_pelanggan ) REFERENCES pelanggan ( nomor_pelanggan ) ON DELETE CASCADE ;

ALTER TABLE menginput ADD CONSTRAINT menginput_data_akun_FK FOREIGN KEY ( username ) REFERENCES data_akun ( username ) ON DELETE CASCADE ;

ALTER TABLE menginput ADD CONSTRAINT menginput_supplier_FK FOREIGN KEY ( id_supplier ) REFERENCES supplier ( id_supplier ) ON DELETE CASCADE ;
