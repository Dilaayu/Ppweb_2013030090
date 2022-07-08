
    public static void main(String[] args) {

//Perintah meginputkan data
        String nim = "";
        nim=JOptionPane.showInputDialog("Inputkan NIM  : ");
        String nama = "";
        nama=JOptionPane.showInputDialog("Inputkan Nama : ");
        String alamat = "";
        alamat=JOptionPane.showInputDialog("Inputkan Alamat : ");
        String email = "";
        telp=JOptionPane.showInputDialog("Inputkan Telp : ");
        String nohp = "";
        usia=JOptionPane.showInputDialog("Inputkan Usia : ");

        //Menampilkan data yang telah di input
        javax.swing.JOptionPane.showMessageDialog(null,"NIM : "+nim
                +"\nNama : "+nama
                +"\nAlamat : "+alamat
                +"\nTelp : "+telp
                +"\nUsia : "+usia);
    }
    
}