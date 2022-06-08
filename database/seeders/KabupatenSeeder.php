<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kabupaten;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kabupaten::truncate();
        Kabupaten::insert([
            [
               'kode_kabupaten' => '1101',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Simeulue'
            ],
            [
               'kode_kabupaten' => '1102',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Singkil'
            ],
            [
               'kode_kabupaten' => '1103',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Selatan'
            ],
            [
               'kode_kabupaten' => '1104',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Tenggara'
            ],
            [
               'kode_kabupaten' => '1105',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Timur'
            ],
            [
               'kode_kabupaten' => '1106',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Tengah'
            ],
            [
               'kode_kabupaten' => '1107',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Barat'
            ],
            [
               'kode_kabupaten' => '1108',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Besar'
            ],
            [
               'kode_kabupaten' => '1109',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Pidie'
            ],
            [
               'kode_kabupaten' => '1110',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Bireuen'
            ],
            [
               'kode_kabupaten' => '1111',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Utara'
            ],
            [
               'kode_kabupaten' => '1112',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Barat Daya'
            ],
            [
               'kode_kabupaten' => '1113',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Gayo Lues'
            ],
            [
               'kode_kabupaten' => '1114',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Tamiang'
            ],
            [
               'kode_kabupaten' => '1115',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Nagan Raya'
            ],
            [
               'kode_kabupaten' => '1116',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Aceh Jaya'
            ],
            [
               'kode_kabupaten' => '1117',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Bener Meriah'
            ],
            [
               'kode_kabupaten' => '1118',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kab. Pidie Jaya'
            ],
            [
               'kode_kabupaten' => '1171',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kota Banda Aceh'
            ],
            [
               'kode_kabupaten' => '1172',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kota Sabang'
            ],
            [
               'kode_kabupaten' => '1173',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kota Langsa'
            ],
            [
               'kode_kabupaten' => '1174',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kota Lhokseumawe'
            ],
            [
               'kode_kabupaten' => '1175',
               'kode_provinsi' => '11',
               'nama_kabupaten' => 'Kota Subulussalam'
            ],
            [
               'kode_kabupaten' => '1201',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Nias'
            ],
            [
               'kode_kabupaten' => '1202',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Mandailing Natal'
            ],
            [
               'kode_kabupaten' => '1203',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Tapanuli Selatan'
            ],
            [
               'kode_kabupaten' => '1204',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Tapanuli Tengah'
            ],
            [
               'kode_kabupaten' => '1205',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Tapanuli Utara'
            ],
            [
               'kode_kabupaten' => '1206',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Toba Samosir'
            ],
            [
               'kode_kabupaten' => '1207',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Labuhan Batu'
            ],
            [
               'kode_kabupaten' => '1208',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Asahan'
            ],
            [
               'kode_kabupaten' => '1209',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Simalungun'
            ],
            [
               'kode_kabupaten' => '1210',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Dairi'
            ],
            [
               'kode_kabupaten' => '1211',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Karo'
            ],
            [
               'kode_kabupaten' => '1212',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Deli Serdang'
            ],
            [
               'kode_kabupaten' => '1213',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Langkat'
            ],
            [
               'kode_kabupaten' => '1214',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Nias Selatan'
            ],
            [
               'kode_kabupaten' => '1215',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Humbang Hasundutan'
            ],
            [
               'kode_kabupaten' => '1216',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Pakpak Bharat'
            ],
            [
               'kode_kabupaten' => '1217',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Samosir'
            ],
            [
               'kode_kabupaten' => '1218',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Serdang Bedagai'
            ],
            [
               'kode_kabupaten' => '1219',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Batu Bara'
            ],
            [
               'kode_kabupaten' => '1220',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Padang Lawas Utara'
            ],
            [
               'kode_kabupaten' => '1221',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Padang Lawas'
            ],
            [
               'kode_kabupaten' => '1222',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Labuhan Batu Selatan'
            ],
            [
               'kode_kabupaten' => '1223',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Labuhan Batu Utara'
            ],
            [
               'kode_kabupaten' => '1224',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Nias Utara'
            ],
            [
               'kode_kabupaten' => '1225',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kab. Nias Barat'
            ],
            [
               'kode_kabupaten' => '1271',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kota Sibolga'
            ],
            [
               'kode_kabupaten' => '1272',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kota Tanjung Balai'
            ],
            [
               'kode_kabupaten' => '1273',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kota Pematang Siantar'
            ],
            [
               'kode_kabupaten' => '1274',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kota Tebing Tinggi'
            ],
            [
               'kode_kabupaten' => '1275',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kota Medan'
            ],
            [
               'kode_kabupaten' => '1276',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kota Binjai'
            ],
            [
               'kode_kabupaten' => '1277',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kota Padangsidimpuan'
            ],
            [
               'kode_kabupaten' => '1278',
               'kode_provinsi' => '12',
               'nama_kabupaten' => 'Kota Gunungsitoli'
            ],
            [
               'kode_kabupaten' => '1301',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Kepulauan Mentawai'
            ],
            [
               'kode_kabupaten' => '1302',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Pesisir Selatan'
            ],
            [
               'kode_kabupaten' => '1303',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Solok'
            ],
            [
               'kode_kabupaten' => '1304',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Sijunjung'
            ],
            [
               'kode_kabupaten' => '1305',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Tanah Datar'
            ],
            [
               'kode_kabupaten' => '1306',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Padang Pariaman'
            ],
            [
               'kode_kabupaten' => '1307',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Agam'
            ],
            [
               'kode_kabupaten' => '1308',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Lima Puluh Kota'
            ],
            [
               'kode_kabupaten' => '1309',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Pasaman'
            ],
            [
               'kode_kabupaten' => '1310',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Solok Selatan'
            ],
            [
               'kode_kabupaten' => '1311',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Dharmasraya'
            ],
            [
               'kode_kabupaten' => '1312',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kab. Pasaman Barat'
            ],
            [
               'kode_kabupaten' => '1371',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kota Padang'
            ],
            [
               'kode_kabupaten' => '1372',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kota Solok'
            ],
            [
               'kode_kabupaten' => '1373',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kota Sawah Lunto'
            ],
            [
               'kode_kabupaten' => '1374',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kota Padang Panjang'
            ],
            [
               'kode_kabupaten' => '1375',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kota Bukittinggi'
            ],
            [
               'kode_kabupaten' => '1376',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kota Payakumbuh'
            ],
            [
               'kode_kabupaten' => '1377',
               'kode_provinsi' => '13',
               'nama_kabupaten' => 'Kota Pariaman'
            ],
            [
               'kode_kabupaten' => '1401',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Kuantan Singingi'
            ],
            [
               'kode_kabupaten' => '1402',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Indragiri Hulu'
            ],
            [
               'kode_kabupaten' => '1403',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Indragiri Hilir'
            ],
            [
               'kode_kabupaten' => '1404',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Pelalawan'
            ],
            [
               'kode_kabupaten' => '1405',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Siak'
            ],
            [
               'kode_kabupaten' => '1406',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Kampar'
            ],
            [
               'kode_kabupaten' => '1407',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Rokan Hulu'
            ],
            [
               'kode_kabupaten' => '1408',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Bengkalis'
            ],
            [
               'kode_kabupaten' => '1409',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Rokan Hilir'
            ],
            [
               'kode_kabupaten' => '1410',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kab. Kepulauan Meranti'
            ],
            [
               'kode_kabupaten' => '1471',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kota Pekanbaru'
            ],
            [
               'kode_kabupaten' => '1473',
               'kode_provinsi' => '14',
               'nama_kabupaten' => 'Kota Dumai'
            ],
            [
               'kode_kabupaten' => '1501',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kab. Kerinci'
            ],
            [
               'kode_kabupaten' => '1502',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kab. Merangin'
            ],
            [
               'kode_kabupaten' => '1503',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kab. Sarolangun'
            ],
            [
               'kode_kabupaten' => '1504',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kab. Batang Hari'
            ],
            [
               'kode_kabupaten' => '1505',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kab. Muaro Jambi'
            ],
            [
               'kode_kabupaten' => '1506',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kab. Tanjung Jabung Timur'
            ],
            [
               'kode_kabupaten' => '1507',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kab. Tanjung Jabung Barat'
            ],
            [
               'kode_kabupaten' => '1508',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kab. Tebo'
            ],
            [
               'kode_kabupaten' => '1509',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kab. Bungo'
            ],
            [
               'kode_kabupaten' => '1571',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kota Jambi'
            ],
            [
               'kode_kabupaten' => '1572',
               'kode_provinsi' => '15',
               'nama_kabupaten' => 'Kota Sungai Penuh'
            ],
            [
               'kode_kabupaten' => '1601',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Ogan Komering Ulu'
            ],
            [
               'kode_kabupaten' => '1602',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Ogan Komering Ilir'
            ],
            [
               'kode_kabupaten' => '1603',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Muara Enim'
            ],
            [
               'kode_kabupaten' => '1604',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Lahat'
            ],
            [
               'kode_kabupaten' => '1605',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Musi Rawas'
            ],
            [
               'kode_kabupaten' => '1606',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Musi Banyuasin'
            ],
            [
               'kode_kabupaten' => '1607',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Banyu Asin'
            ],
            [
               'kode_kabupaten' => '1608',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Ogan Komering Ulu Selatan'
            ],
            [
               'kode_kabupaten' => '1609',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Ogan Komering Ulu Timur'
            ],
            [
               'kode_kabupaten' => '1610',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Ogan Ilir'
            ],
            [
               'kode_kabupaten' => '1611',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kab. Empat Lawang'
            ],
            [
               'kode_kabupaten' => '1671',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kota Palembang'
            ],
            [
               'kode_kabupaten' => '1672',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kota Prabumulih'
            ],
            [
               'kode_kabupaten' => '1673',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kota Pagar Alam'
            ],
            [
               'kode_kabupaten' => '1674',
               'kode_provinsi' => '16',
               'nama_kabupaten' => 'Kota Lubuklinggau'
            ],
            [
               'kode_kabupaten' => '1701',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kab. Bengkulu Selatan'
            ],
            [
               'kode_kabupaten' => '1702',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kab. Rejang Lebong'
            ],
            [
               'kode_kabupaten' => '1703',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kab. Bengkulu Utara'
            ],
            [
               'kode_kabupaten' => '1704',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kab. Kaur'
            ],
            [
               'kode_kabupaten' => '1705',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kab. Seluma'
            ],
            [
               'kode_kabupaten' => '1706',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kab. Mukomuko'
            ],
            [
               'kode_kabupaten' => '1707',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kab. Lebong'
            ],
            [
               'kode_kabupaten' => '1708',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kab. Kepahiang'
            ],
            [
               'kode_kabupaten' => '1709',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kab. Bengkulu Tengah'
            ],
            [
               'kode_kabupaten' => '1771',
               'kode_provinsi' => '17',
               'nama_kabupaten' => 'Kota Bengkulu'
            ],
            [
               'kode_kabupaten' => '1801',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Lampung Barat'
            ],
            [
               'kode_kabupaten' => '1802',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Tanggamus'
            ],
            [
               'kode_kabupaten' => '1803',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Lampung Selatan'
            ],
            [
               'kode_kabupaten' => '1804',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Lampung Timur'
            ],
            [
               'kode_kabupaten' => '1805',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Lampung Tengah'
            ],
            [
               'kode_kabupaten' => '1806',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Lampung Utara'
            ],
            [
               'kode_kabupaten' => '1807',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Way Kanan'
            ],
            [
               'kode_kabupaten' => '1808',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Tulangbawang'
            ],
            [
               'kode_kabupaten' => '1809',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Pesawaran'
            ],
            [
               'kode_kabupaten' => '1810',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Pringsewu'
            ],
            [
               'kode_kabupaten' => '1811',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Mesuji'
            ],
            [
               'kode_kabupaten' => '1812',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Tulang Bawang Barat'
            ],
            [
               'kode_kabupaten' => '1813',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kab. Pesisir Barat'
            ],
            [
               'kode_kabupaten' => '1871',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kota Bandar Lampung'
            ],
            [
               'kode_kabupaten' => '1872',
               'kode_provinsi' => '18',
               'nama_kabupaten' => 'Kota Metro'
            ],
            [
               'kode_kabupaten' => '1901',
               'kode_provinsi' => '19',
               'nama_kabupaten' => 'Kab. Bangka'
            ],
            [
               'kode_kabupaten' => '1902',
               'kode_provinsi' => '19',
               'nama_kabupaten' => 'Kab. Belitung'
            ],
            [
               'kode_kabupaten' => '1903',
               'kode_provinsi' => '19',
               'nama_kabupaten' => 'Kab. Bangka Barat'
            ],
            [
               'kode_kabupaten' => '1904',
               'kode_provinsi' => '19',
               'nama_kabupaten' => 'Kab. Bangka Tengah'
            ],
            [
               'kode_kabupaten' => '1905',
               'kode_provinsi' => '19',
               'nama_kabupaten' => 'Kab. Bangka Selatan'
            ],
            [
               'kode_kabupaten' => '1906',
               'kode_provinsi' => '19',
               'nama_kabupaten' => 'Kab. Belitung Timur'
            ],
            [
               'kode_kabupaten' => '1971',
               'kode_provinsi' => '19',
               'nama_kabupaten' => 'Kota Pangkal Pinang'
            ],
            [
               'kode_kabupaten' => '2101',
               'kode_provinsi' => '21',
               'nama_kabupaten' => 'Kab. Karimun'
            ],
            [
               'kode_kabupaten' => '2102',
               'kode_provinsi' => '21',
               'nama_kabupaten' => 'Kab. Bintan'
            ],
            [
               'kode_kabupaten' => '2103',
               'kode_provinsi' => '21',
               'nama_kabupaten' => 'Kab. Natuna'
            ],
            [
               'kode_kabupaten' => '2104',
               'kode_provinsi' => '21',
               'nama_kabupaten' => 'Kab. Lingga'
            ],
            [
               'kode_kabupaten' => '2105',
               'kode_provinsi' => '21',
               'nama_kabupaten' => 'Kab. Kepulauan Anambas'
            ],
            [
               'kode_kabupaten' => '2171',
               'kode_provinsi' => '21',
               'nama_kabupaten' => 'Kota Batam'
            ],
            [
               'kode_kabupaten' => '2172',
               'kode_provinsi' => '21',
               'nama_kabupaten' => 'Kota Tanjung Pinang'
            ],
            [
               'kode_kabupaten' => '3101',
               'kode_provinsi' => '31',
               'nama_kabupaten' => 'Kab. Kepulauan Seribu'
            ],
            [
               'kode_kabupaten' => '3171',
               'kode_provinsi' => '31',
               'nama_kabupaten' => 'Kota Jakarta Selatan'
            ],
            [
               'kode_kabupaten' => '3172',
               'kode_provinsi' => '31',
               'nama_kabupaten' => 'Kota Jakarta Timur'
            ],
            [
               'kode_kabupaten' => '3173',
               'kode_provinsi' => '31',
               'nama_kabupaten' => 'Kota Jakarta Pusat'
            ],
            [
               'kode_kabupaten' => '3174',
               'kode_provinsi' => '31',
               'nama_kabupaten' => 'Kota Jakarta Barat'
            ],
            [
               'kode_kabupaten' => '3175',
               'kode_provinsi' => '31',
               'nama_kabupaten' => 'Kota Jakarta Utara'
            ],
            [
               'kode_kabupaten' => '3201',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Bogor'
            ],
            [
               'kode_kabupaten' => '3202',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Sukabumi'
            ],
            [
               'kode_kabupaten' => '3203',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Cianjur'
            ],
            [
               'kode_kabupaten' => '3204',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Bandung'
            ],
            [
               'kode_kabupaten' => '3205',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Garut'
            ],
            [
               'kode_kabupaten' => '3206',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Tasikmalaya'
            ],
            [
               'kode_kabupaten' => '3207',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Ciamis'
            ],
            [
               'kode_kabupaten' => '3208',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Kuningan'
            ],
            [
               'kode_kabupaten' => '3209',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Cirebon'
            ],
            [
               'kode_kabupaten' => '3210',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Majalengka'
            ],
            [
               'kode_kabupaten' => '3211',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Sumedang'
            ],
            [
               'kode_kabupaten' => '3212',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Indramayu'
            ],
            [
               'kode_kabupaten' => '3213',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Subang'
            ],
            [
               'kode_kabupaten' => '3214',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Purwakarta'
            ],
            [
               'kode_kabupaten' => '3215',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Karawang'
            ],
            [
               'kode_kabupaten' => '3216',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Bekasi'
            ],
            [
               'kode_kabupaten' => '3217',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Bandung Barat'
            ],
            [
               'kode_kabupaten' => '3218',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kab. Pangandaran'
            ],
            [
               'kode_kabupaten' => '3271',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kota Bogor'
            ],
            [
               'kode_kabupaten' => '3272',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kota Sukabumi'
            ],
            [
               'kode_kabupaten' => '3273',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kota Bandung'
            ],
            [
               'kode_kabupaten' => '3274',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kota Cirebon'
            ],
            [
               'kode_kabupaten' => '3275',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kota Bekasi'
            ],
            [
               'kode_kabupaten' => '3276',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kota Depok'
            ],
            [
               'kode_kabupaten' => '3277',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kota Cimahi'
            ],
            [
               'kode_kabupaten' => '3278',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kota Tasikmalaya'
            ],
            [
               'kode_kabupaten' => '3279',
               'kode_provinsi' => '32',
               'nama_kabupaten' => 'Kota Banjar'
            ],
            [
               'kode_kabupaten' => '3301',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Cilacap'
            ],
            [
               'kode_kabupaten' => '3302',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Banyumas'
            ],
            [
               'kode_kabupaten' => '3303',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Purbalingga'
            ],
            [
               'kode_kabupaten' => '3304',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Banjarnegara'
            ],
            [
               'kode_kabupaten' => '3305',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Kebumen'
            ],
            [
               'kode_kabupaten' => '3306',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Purworejo'
            ],
            [
               'kode_kabupaten' => '3307',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Wonosobo'
            ],
            [
               'kode_kabupaten' => '3308',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Magelang'
            ],
            [
               'kode_kabupaten' => '3309',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Boyolali'
            ],
            [
               'kode_kabupaten' => '3310',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Klaten'
            ],
            [
               'kode_kabupaten' => '3311',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Sukoharjo'
            ],
            [
               'kode_kabupaten' => '3312',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Wonogiri'
            ],
            [
               'kode_kabupaten' => '3313',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Karanganyar'
            ],
            [
               'kode_kabupaten' => '3314',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Sragen'
            ],
            [
               'kode_kabupaten' => '3315',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Grobogan'
            ],
            [
               'kode_kabupaten' => '3316',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Blora'
            ],
            [
               'kode_kabupaten' => '3317',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Rembang'
            ],
            [
               'kode_kabupaten' => '3318',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Pati'
            ],
            [
               'kode_kabupaten' => '3319',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Kudus'
            ],
            [
               'kode_kabupaten' => '3320',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Jepara'
            ],
            [
               'kode_kabupaten' => '3321',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Demak'
            ],
            [
               'kode_kabupaten' => '3322',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Semarang'
            ],
            [
               'kode_kabupaten' => '3323',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Temanggung'
            ],
            [
               'kode_kabupaten' => '3324',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Kendal'
            ],
            [
               'kode_kabupaten' => '3325',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Batang'
            ],
            [
               'kode_kabupaten' => '3326',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Pekalongan'
            ],
            [
               'kode_kabupaten' => '3327',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Pemalang'
            ],
            [
               'kode_kabupaten' => '3328',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Tegal'
            ],
            [
               'kode_kabupaten' => '3329',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kab. Brebes'
            ],
            [
               'kode_kabupaten' => '3371',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kota Magelang'
            ],
            [
               'kode_kabupaten' => '3372',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kota Surakarta'
            ],
            [
               'kode_kabupaten' => '3373',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kota Salatiga'
            ],
            [
               'kode_kabupaten' => '3374',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kota Semarang'
            ],
            [
               'kode_kabupaten' => '3375',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kota Pekalongan'
            ],
            [
               'kode_kabupaten' => '3376',
               'kode_provinsi' => '33',
               'nama_kabupaten' => 'Kota Tegal'
            ],
            [
               'kode_kabupaten' => '3401',
               'kode_provinsi' => '34',
               'nama_kabupaten' => 'Kab. Kulon Progo'
            ],
            [
               'kode_kabupaten' => '3402',
               'kode_provinsi' => '34',
               'nama_kabupaten' => 'Kab. Bantul'
            ],
            [
               'kode_kabupaten' => '3403',
               'kode_provinsi' => '34',
               'nama_kabupaten' => 'Kab. Gunung Kidul'
            ],
            [
               'kode_kabupaten' => '3404',
               'kode_provinsi' => '34',
               'nama_kabupaten' => 'Kab. Sleman'
            ],
            [
               'kode_kabupaten' => '3471',
               'kode_provinsi' => '34',
               'nama_kabupaten' => 'Kota Yogyakarta'
            ],
            [
               'kode_kabupaten' => '3501',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Pacitan'
            ],
            [
               'kode_kabupaten' => '3502',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Ponorogo'
            ],
            [
               'kode_kabupaten' => '3503',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Trenggalek'
            ],
            [
               'kode_kabupaten' => '3504',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Tulungagung'
            ],
            [
               'kode_kabupaten' => '3505',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Blitar'
            ],
            [
               'kode_kabupaten' => '3506',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Kediri'
            ],
            [
               'kode_kabupaten' => '3507',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Malang'
            ],
            [
               'kode_kabupaten' => '3508',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Lumajang'
            ],
            [
               'kode_kabupaten' => '3509',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Jember'
            ],
            [
               'kode_kabupaten' => '3510',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Banyuwangi'
            ],
            [
               'kode_kabupaten' => '3511',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Bondowoso'
            ],
            [
               'kode_kabupaten' => '3512',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Situbondo'
            ],
            [
               'kode_kabupaten' => '3513',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Probolinggo'
            ],
            [
               'kode_kabupaten' => '3514',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Pasuruan'
            ],
            [
               'kode_kabupaten' => '3515',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Sidoarjo'
            ],
            [
               'kode_kabupaten' => '3516',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Mojokerto'
            ],
            [
               'kode_kabupaten' => '3517',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Jombang'
            ],
            [
               'kode_kabupaten' => '3518',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Nganjuk'
            ],
            [
               'kode_kabupaten' => '3519',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Madiun'
            ],
            [
               'kode_kabupaten' => '3520',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Magetan'
            ],
            [
               'kode_kabupaten' => '3521',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Ngawi'
            ],
            [
               'kode_kabupaten' => '3522',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Bojonegoro'
            ],
            [
               'kode_kabupaten' => '3523',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Tuban'
            ],
            [
               'kode_kabupaten' => '3524',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Lamongan'
            ],
            [
               'kode_kabupaten' => '3525',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Gresik'
            ],
            [
               'kode_kabupaten' => '3526',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Bangkalan'
            ],
            [
               'kode_kabupaten' => '3527',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Sampang'
            ],
            [
               'kode_kabupaten' => '3528',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Pamekasan'
            ],
            [
               'kode_kabupaten' => '3529',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kab. Sumenep'
            ],
            [
               'kode_kabupaten' => '3571',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kota Kediri'
            ],
            [
               'kode_kabupaten' => '3572',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kota Blitar'
            ],
            [
               'kode_kabupaten' => '3573',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kota Malang'
            ],
            [
               'kode_kabupaten' => '3574',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kota Probolinggo'
            ],
            [
               'kode_kabupaten' => '3575',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kota Pasuruan'
            ],
            [
               'kode_kabupaten' => '3576',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kota Mojokerto'
            ],
            [
               'kode_kabupaten' => '3577',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kota Madiun'
            ],
            [
               'kode_kabupaten' => '3578',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kota Surabaya'
            ],
            [
               'kode_kabupaten' => '3579',
               'kode_provinsi' => '35',
               'nama_kabupaten' => 'Kota Batu'
            ],
            [
               'kode_kabupaten' => '3601',
               'kode_provinsi' => '36',
               'nama_kabupaten' => 'Kab. Pandeglang'
            ],
            [
               'kode_kabupaten' => '3602',
               'kode_provinsi' => '36',
               'nama_kabupaten' => 'Kab. Lebak'
            ],
            [
               'kode_kabupaten' => '3603',
               'kode_provinsi' => '36',
               'nama_kabupaten' => 'Kab. Tangerang'
            ],
            [
               'kode_kabupaten' => '3604',
               'kode_provinsi' => '36',
               'nama_kabupaten' => 'Kab. Serang'
            ],
            [
               'kode_kabupaten' => '3671',
               'kode_provinsi' => '36',
               'nama_kabupaten' => 'Kota Tangerang'
            ],
            [
               'kode_kabupaten' => '3672',
               'kode_provinsi' => '36',
               'nama_kabupaten' => 'Kota Cilegon'
            ],
            [
               'kode_kabupaten' => '3673',
               'kode_provinsi' => '36',
               'nama_kabupaten' => 'Kota Serang'
            ],
            [
               'kode_kabupaten' => '3674',
               'kode_provinsi' => '36',
               'nama_kabupaten' => 'Kota Tangerang Selatan'
            ],
            [
               'kode_kabupaten' => '5101',
               'kode_provinsi' => '51',
               'nama_kabupaten' => 'Kab. Jembrana'
            ],
            [
               'kode_kabupaten' => '5102',
               'kode_provinsi' => '51',
               'nama_kabupaten' => 'Kab. Tabanan'
            ],
            [
               'kode_kabupaten' => '5103',
               'kode_provinsi' => '51',
               'nama_kabupaten' => 'Kab. Badung'
            ],
            [
               'kode_kabupaten' => '5104',
               'kode_provinsi' => '51',
               'nama_kabupaten' => 'Kab. Gianyar'
            ],
            [
               'kode_kabupaten' => '5105',
               'kode_provinsi' => '51',
               'nama_kabupaten' => 'Kab. Klungkung'
            ],
            [
               'kode_kabupaten' => '5106',
               'kode_provinsi' => '51',
               'nama_kabupaten' => 'Kab. Bangli'
            ],
            [
               'kode_kabupaten' => '5107',
               'kode_provinsi' => '51',
               'nama_kabupaten' => 'Kab. Karang Asem'
            ],
            [
               'kode_kabupaten' => '5108',
               'kode_provinsi' => '51',
               'nama_kabupaten' => 'Kab. Buleleng'
            ],
            [
               'kode_kabupaten' => '5171',
               'kode_provinsi' => '51',
               'nama_kabupaten' => 'Kota Denpasar'
            ],
            [
               'kode_kabupaten' => '5201',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kab. Lombok Barat'
            ],
            [
               'kode_kabupaten' => '5202',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kab. Lombok Tengah'
            ],
            [
               'kode_kabupaten' => '5203',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kab. Lombok Timur'
            ],
            [
               'kode_kabupaten' => '5204',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kab. Sumbawa'
            ],
            [
               'kode_kabupaten' => '5205',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kab. Dompu'
            ],
            [
               'kode_kabupaten' => '5206',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kab. Bima'
            ],
            [
               'kode_kabupaten' => '5207',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kab. Sumbawa Barat'
            ],
            [
               'kode_kabupaten' => '5208',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kab. Lombok Utara'
            ],
            [
               'kode_kabupaten' => '5271',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kota Mataram'
            ],
            [
               'kode_kabupaten' => '5272',
               'kode_provinsi' => '52',
               'nama_kabupaten' => 'Kota Bima'
            ],
            [
               'kode_kabupaten' => '5301',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Sumba Barat'
            ],
            [
               'kode_kabupaten' => '5302',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Sumba Timur'
            ],
            [
               'kode_kabupaten' => '5303',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Kupang'
            ],
            [
               'kode_kabupaten' => '5304',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Timor Tengah Selatan'
            ],
            [
               'kode_kabupaten' => '5305',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Timor Tengah Utara'
            ],
            [
               'kode_kabupaten' => '5306',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Belu'
            ],
            [
               'kode_kabupaten' => '5307',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Alor'
            ],
            [
               'kode_kabupaten' => '5308',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Lembata'
            ],
            [
               'kode_kabupaten' => '5309',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Flores Timur'
            ],
            [
               'kode_kabupaten' => '5310',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Sikka'
            ],
            [
               'kode_kabupaten' => '5311',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Ende'
            ],
            [
               'kode_kabupaten' => '5312',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Ngada'
            ],
            [
               'kode_kabupaten' => '5313',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Manggarai'
            ],
            [
               'kode_kabupaten' => '5314',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Rote Ndao'
            ],
            [
               'kode_kabupaten' => '5315',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Manggarai Barat'
            ],
            [
               'kode_kabupaten' => '5316',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Sumba Tengah'
            ],
            [
               'kode_kabupaten' => '5317',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Sumba Barat Daya'
            ],
            [
               'kode_kabupaten' => '5318',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Nagekeo'
            ],
            [
               'kode_kabupaten' => '5319',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Manggarai Timur'
            ],
            [
               'kode_kabupaten' => '5320',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kab. Sabu Raijua'
            ],
            [
               'kode_kabupaten' => '5371',
               'kode_provinsi' => '53',
               'nama_kabupaten' => 'Kota Kupang'
            ],
            [
               'kode_kabupaten' => '6101',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Sambas'
            ],
            [
               'kode_kabupaten' => '6102',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Bengkayang'
            ],
            [
               'kode_kabupaten' => '6103',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Landak'
            ],
            [
               'kode_kabupaten' => '6104',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Pontianak'
            ],
            [
               'kode_kabupaten' => '6105',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Sanggau'
            ],
            [
               'kode_kabupaten' => '6106',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Ketapang'
            ],
            [
               'kode_kabupaten' => '6107',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Sintang'
            ],
            [
               'kode_kabupaten' => '6108',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Kapuas Hulu'
            ],
            [
               'kode_kabupaten' => '6109',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Sekadau'
            ],
            [
               'kode_kabupaten' => '6110',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Melawi'
            ],
            [
               'kode_kabupaten' => '6111',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Kayong Utara'
            ],
            [
               'kode_kabupaten' => '6112',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kab. Kubu Raya'
            ],
            [
               'kode_kabupaten' => '6171',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kota Pontianak'
            ],
            [
               'kode_kabupaten' => '6172',
               'kode_provinsi' => '61',
               'nama_kabupaten' => 'Kota Singkawang'
            ],
            [
               'kode_kabupaten' => '6201',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Kotawaringin Barat'
            ],
            [
               'kode_kabupaten' => '6202',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Kotawaringin Timur'
            ],
            [
               'kode_kabupaten' => '6203',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Kapuas'
            ],
            [
               'kode_kabupaten' => '6204',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Barito Selatan'
            ],
            [
               'kode_kabupaten' => '6205',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Barito Utara'
            ],
            [
               'kode_kabupaten' => '6206',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Sukamara'
            ],
            [
               'kode_kabupaten' => '6207',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Lamandau'
            ],
            [
               'kode_kabupaten' => '6208',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Seruyan'
            ],
            [
               'kode_kabupaten' => '6209',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Katingan'
            ],
            [
               'kode_kabupaten' => '6210',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Pulang Pisau'
            ],
            [
               'kode_kabupaten' => '6211',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Gunung Mas'
            ],
            [
               'kode_kabupaten' => '6212',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Barito Timur'
            ],
            [
               'kode_kabupaten' => '6213',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kab. Murung Raya'
            ],
            [
               'kode_kabupaten' => '6271',
               'kode_provinsi' => '62',
               'nama_kabupaten' => 'Kota Palangka Raya'
            ],
            [
               'kode_kabupaten' => '6301',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Tanah Laut'
            ],
            [
               'kode_kabupaten' => '6302',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Kota Baru'
            ],
            [
               'kode_kabupaten' => '6303',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Banjar'
            ],
            [
               'kode_kabupaten' => '6304',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Barito Kuala'
            ],
            [
               'kode_kabupaten' => '6305',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Tapin'
            ],
            [
               'kode_kabupaten' => '6306',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Hulu Sungai Selatan'
            ],
            [
               'kode_kabupaten' => '6307',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Hulu Sungai Tengah'
            ],
            [
               'kode_kabupaten' => '6308',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Hulu Sungai Utara'
            ],
            [
               'kode_kabupaten' => '6309',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Tabalong'
            ],
            [
               'kode_kabupaten' => '6310',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Tanah Bumbu'
            ],
            [
               'kode_kabupaten' => '6311',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kab. Balangan'
            ],
            [
               'kode_kabupaten' => '6371',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kota Banjarmasin'
            ],
            [
               'kode_kabupaten' => '6372',
               'kode_provinsi' => '63',
               'nama_kabupaten' => 'Kota Banjar Baru'
            ],
            [
               'kode_kabupaten' => '6401',
               'kode_provinsi' => '64',
               'nama_kabupaten' => 'Kab. Paser'
            ],
            [
               'kode_kabupaten' => '6402',
               'kode_provinsi' => '64',
               'nama_kabupaten' => 'Kab. Kutai Barat'
            ],
            [
               'kode_kabupaten' => '6403',
               'kode_provinsi' => '64',
               'nama_kabupaten' => 'Kab. Kutai Kartanegara'
            ],
            [
               'kode_kabupaten' => '6404',
               'kode_provinsi' => '64',
               'nama_kabupaten' => 'Kab. Kutai Timur'
            ],
            [
               'kode_kabupaten' => '6405',
               'kode_provinsi' => '64',
               'nama_kabupaten' => 'Kab. Berau'
            ],
            [
               'kode_kabupaten' => '6409',
               'kode_provinsi' => '64',
               'nama_kabupaten' => 'Kab. Penajam Paser Utara'
            ],
            [
               'kode_kabupaten' => '6471',
               'kode_provinsi' => '64',
               'nama_kabupaten' => 'Kota Balikpapan'
            ],
            [
               'kode_kabupaten' => '6472',
               'kode_provinsi' => '64',
               'nama_kabupaten' => 'Kota Samarinda'
            ],
            [
               'kode_kabupaten' => '6474',
               'kode_provinsi' => '64',
               'nama_kabupaten' => 'Kota Bontang'
            ],
            [
               'kode_kabupaten' => '6501',
               'kode_provinsi' => '65',
               'nama_kabupaten' => 'Kab. Malinau'
            ],
            [
               'kode_kabupaten' => '6502',
               'kode_provinsi' => '65',
               'nama_kabupaten' => 'Kab. Bulungan'
            ],
            [
               'kode_kabupaten' => '6503',
               'kode_provinsi' => '65',
               'nama_kabupaten' => 'Kab. Tana Tidung'
            ],
            [
               'kode_kabupaten' => '6504',
               'kode_provinsi' => '65',
               'nama_kabupaten' => 'Kab. Nunukan'
            ],
            [
               'kode_kabupaten' => '6571',
               'kode_provinsi' => '65',
               'nama_kabupaten' => 'Kota Tarakan'
            ],
            [
               'kode_kabupaten' => '7101',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Bolaang Mongondow'
            ],
            [
               'kode_kabupaten' => '7102',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Minahasa'
            ],
            [
               'kode_kabupaten' => '7103',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Kepulauan Sangihe'
            ],
            [
               'kode_kabupaten' => '7104',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Kepulauan Talaud'
            ],
            [
               'kode_kabupaten' => '7105',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Minahasa Selatan'
            ],
            [
               'kode_kabupaten' => '7106',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Minahasa Utara'
            ],
            [
               'kode_kabupaten' => '7107',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Bolaang Mongondow Utara'
            ],
            [
               'kode_kabupaten' => '7108',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Siau Tagulandang Biaro'
            ],
            [
               'kode_kabupaten' => '7109',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Minahasa Tenggara'
            ],
            [
               'kode_kabupaten' => '7110',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Bolaang Mongondow Selatan'
            ],
            [
               'kode_kabupaten' => '7111',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kab. Bolaang Mongondow Timur'
            ],
            [
               'kode_kabupaten' => '7171',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kota Manado'
            ],
            [
               'kode_kabupaten' => '7172',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kota Bitung'
            ],
            [
               'kode_kabupaten' => '7173',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kota Tomohon'
            ],
            [
               'kode_kabupaten' => '7174',
               'kode_provinsi' => '71',
               'nama_kabupaten' => 'Kota Kotamobagu'
            ],
            [
               'kode_kabupaten' => '7201',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Banggai Kepulauan'
            ],
            [
               'kode_kabupaten' => '7202',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Banggai'
            ],
            [
               'kode_kabupaten' => '7203',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Morowali'
            ],
            [
               'kode_kabupaten' => '7204',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Poso'
            ],
            [
               'kode_kabupaten' => '7205',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Donggala'
            ],
            [
               'kode_kabupaten' => '7206',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Toli-toli'
            ],
            [
               'kode_kabupaten' => '7207',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Buol'
            ],
            [
               'kode_kabupaten' => '7208',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Parigi Moutong'
            ],
            [
               'kode_kabupaten' => '7209',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Tojo Una-una'
            ],
            [
               'kode_kabupaten' => '7210',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kab. Sigi'
            ],
            [
               'kode_kabupaten' => '7271',
               'kode_provinsi' => '72',
               'nama_kabupaten' => 'Kota Palu'
            ],
            [
               'kode_kabupaten' => '7301',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Kepulauan Selayar'
            ],
            [
               'kode_kabupaten' => '7302',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Bulukumba'
            ],
            [
               'kode_kabupaten' => '7303',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Bantaeng'
            ],
            [
               'kode_kabupaten' => '7304',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Jeneponto'
            ],
            [
               'kode_kabupaten' => '7305',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Takalar'
            ],
            [
               'kode_kabupaten' => '7306',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Gowa'
            ],
            [
               'kode_kabupaten' => '7307',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Sinjai'
            ],
            [
               'kode_kabupaten' => '7308',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Maros'
            ],
            [
               'kode_kabupaten' => '7309',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Pangkajene Dan Kepulauan'
            ],
            [
               'kode_kabupaten' => '7310',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Barru'
            ],
            [
               'kode_kabupaten' => '7311',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Bone'
            ],
            [
               'kode_kabupaten' => '7312',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Soppeng'
            ],
            [
               'kode_kabupaten' => '7313',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Wajo'
            ],
            [
               'kode_kabupaten' => '7314',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Sidenreng Rappang'
            ],
            [
               'kode_kabupaten' => '7315',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Pinrang'
            ],
            [
               'kode_kabupaten' => '7316',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Enrekang'
            ],
            [
               'kode_kabupaten' => '7317',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Luwu'
            ],
            [
               'kode_kabupaten' => '7318',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Tana Toraja'
            ],
            [
               'kode_kabupaten' => '7322',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Luwu Utara'
            ],
            [
               'kode_kabupaten' => '7325',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Luwu Timur'
            ],
            [
               'kode_kabupaten' => '7326',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kab. Toraja Utara'
            ],
            [
               'kode_kabupaten' => '7371',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kota Makassar'
            ],
            [
               'kode_kabupaten' => '7372',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kota Parepare'
            ],
            [
               'kode_kabupaten' => '7373',
               'kode_provinsi' => '73',
               'nama_kabupaten' => 'Kota Palopo'
            ],
            [
               'kode_kabupaten' => '7401',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Buton'
            ],
            [
               'kode_kabupaten' => '7402',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Muna'
            ],
            [
               'kode_kabupaten' => '7403',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Konawe'
            ],
            [
               'kode_kabupaten' => '7404',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Kolaka'
            ],
            [
               'kode_kabupaten' => '7405',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Konawe Selatan'
            ],
            [
               'kode_kabupaten' => '7406',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Bombana'
            ],
            [
               'kode_kabupaten' => '7407',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Wakatobi'
            ],
            [
               'kode_kabupaten' => '7408',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Kolaka Utara'
            ],
            [
               'kode_kabupaten' => '7409',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Buton Utara'
            ],
            [
               'kode_kabupaten' => '7410',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kab. Konawe Utara'
            ],
            [
               'kode_kabupaten' => '7471',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kota Kendari'
            ],
            [
               'kode_kabupaten' => '7472',
               'kode_provinsi' => '74',
               'nama_kabupaten' => 'Kota Baubau'
            ],
            [
               'kode_kabupaten' => '7501',
               'kode_provinsi' => '75',
               'nama_kabupaten' => 'Kab. Boalemo'
            ],
            [
               'kode_kabupaten' => '7502',
               'kode_provinsi' => '75',
               'nama_kabupaten' => 'Kab. Gorontalo'
            ],
            [
               'kode_kabupaten' => '7503',
               'kode_provinsi' => '75',
               'nama_kabupaten' => 'Kab. Pohuwato'
            ],
            [
               'kode_kabupaten' => '7504',
               'kode_provinsi' => '75',
               'nama_kabupaten' => 'Kab. Bone Bolango'
            ],
            [
               'kode_kabupaten' => '7505',
               'kode_provinsi' => '75',
               'nama_kabupaten' => 'Kab. Gorontalo Utara'
            ],
            [
               'kode_kabupaten' => '7571',
               'kode_provinsi' => '75',
               'nama_kabupaten' => 'Kota Gorontalo'
            ],
            [
               'kode_kabupaten' => '7601',
               'kode_provinsi' => '76',
               'nama_kabupaten' => 'Kab. Majene'
            ],
            [
               'kode_kabupaten' => '7602',
               'kode_provinsi' => '76',
               'nama_kabupaten' => 'Kab. Polewali Mandar'
            ],
            [
               'kode_kabupaten' => '7603',
               'kode_provinsi' => '76',
               'nama_kabupaten' => 'Kab. Mamasa'
            ],
            [
               'kode_kabupaten' => '7604',
               'kode_provinsi' => '76',
               'nama_kabupaten' => 'Kab. Mamuju'
            ],
            [
               'kode_kabupaten' => '7605',
               'kode_provinsi' => '76',
               'nama_kabupaten' => 'Kab. Mamuju Utara'
            ],
            [
               'kode_kabupaten' => '8101',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kab. Maluku Tenggara Barat'
            ],
            [
               'kode_kabupaten' => '8102',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kab. Maluku Tenggara'
            ],
            [
               'kode_kabupaten' => '8103',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kab. Maluku Tengah'
            ],
            [
               'kode_kabupaten' => '8104',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kab. Buru'
            ],
            [
               'kode_kabupaten' => '8105',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kab. Kepulauan Aru'
            ],
            [
               'kode_kabupaten' => '8106',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kab. Seram Bagian Barat'
            ],
            [
               'kode_kabupaten' => '8107',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kab. Seram Bagian Timur'
            ],
            [
               'kode_kabupaten' => '8108',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kab. Maluku Barat Daya'
            ],
            [
               'kode_kabupaten' => '8109',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kab. Buru Selatan'
            ],
            [
               'kode_kabupaten' => '8171',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kota Ambon'
            ],
            [
               'kode_kabupaten' => '8172',
               'kode_provinsi' => '81',
               'nama_kabupaten' => 'Kota Tual'
            ],
            [
               'kode_kabupaten' => '8201',
               'kode_provinsi' => '82',
               'nama_kabupaten' => 'Kab. Halmahera Barat'
            ],
            [
               'kode_kabupaten' => '8202',
               'kode_provinsi' => '82',
               'nama_kabupaten' => 'Kab. Halmahera Tengah'
            ],
            [
               'kode_kabupaten' => '8203',
               'kode_provinsi' => '82',
               'nama_kabupaten' => 'Kab. Kepulauan Sula'
            ],
            [
               'kode_kabupaten' => '8204',
               'kode_provinsi' => '82',
               'nama_kabupaten' => 'Kab. Halmahera Selatan'
            ],
            [
               'kode_kabupaten' => '8205',
               'kode_provinsi' => '82',
               'nama_kabupaten' => 'Kab. Halmahera Utara'
            ],
            [
               'kode_kabupaten' => '8206',
               'kode_provinsi' => '82',
               'nama_kabupaten' => 'Kab. Halmahera Timur'
            ],
            [
               'kode_kabupaten' => '8207',
               'kode_provinsi' => '82',
               'nama_kabupaten' => 'Kab. Pulau Morotai'
            ],
            [
               'kode_kabupaten' => '8271',
               'kode_provinsi' => '82',
               'nama_kabupaten' => 'Kota Ternate'
            ],
            [
               'kode_kabupaten' => '8272',
               'kode_provinsi' => '82',
               'nama_kabupaten' => 'Kota Tidore Kepulauan'
            ],
            [
               'kode_kabupaten' => '9101',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Fakfak'
            ],
            [
               'kode_kabupaten' => '9102',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Kaimana'
            ],
            [
               'kode_kabupaten' => '9103',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Teluk Wondama'
            ],
            [
               'kode_kabupaten' => '9104',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Teluk Bintuni'
            ],
            [
               'kode_kabupaten' => '9105',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Manokwari'
            ],
            [
               'kode_kabupaten' => '9106',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Sorong Selatan'
            ],
            [
               'kode_kabupaten' => '9107',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Sorong'
            ],
            [
               'kode_kabupaten' => '9108',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Raja Ampat'
            ],
            [
               'kode_kabupaten' => '9109',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Tambrauw'
            ],
            [
               'kode_kabupaten' => '9110',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kab. Maybrat'
            ],
            [
               'kode_kabupaten' => '9171',
               'kode_provinsi' => '91',
               'nama_kabupaten' => 'Kota Sorong'
            ],
            [
               'kode_kabupaten' => '9401',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Merauke'
            ],
            [
               'kode_kabupaten' => '9402',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Jayawijaya'
            ],
            [
               'kode_kabupaten' => '9403',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Jayapura'
            ],
            [
               'kode_kabupaten' => '9404',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Nabire'
            ],
            [
               'kode_kabupaten' => '9408',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Kepulauan Yapen'
            ],
            [
               'kode_kabupaten' => '9409',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Biak Numfor'
            ],
            [
               'kode_kabupaten' => '9410',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Paniai'
            ],
            [
               'kode_kabupaten' => '9411',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Puncak Jaya'
            ],
            [
               'kode_kabupaten' => '9412',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Mimika'
            ],
            [
               'kode_kabupaten' => '9413',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Boven Digoel'
            ],
            [
               'kode_kabupaten' => '9414',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Mappi'
            ],
            [
               'kode_kabupaten' => '9415',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Asmat'
            ],
            [
               'kode_kabupaten' => '9416',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Yahukimo'
            ],
            [
               'kode_kabupaten' => '9417',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Pegunungan Bintang'
            ],
            [
               'kode_kabupaten' => '9418',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Tolikara'
            ],
            [
               'kode_kabupaten' => '9419',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Sarmi'
            ],
            [
               'kode_kabupaten' => '9420',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Keerom'
            ],
            [
               'kode_kabupaten' => '9426',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Waropen'
            ],
            [
               'kode_kabupaten' => '9427',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Supiori'
            ],
            [
               'kode_kabupaten' => '9428',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Mamberamo Raya'
            ],
            [
               'kode_kabupaten' => '9429',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Nduga'
            ],
            [
               'kode_kabupaten' => '9430',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Lanny Jaya'
            ],
            [
               'kode_kabupaten' => '9431',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Mamberamo Tengah'
            ],
            [
               'kode_kabupaten' => '9432',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Yalimo'
            ],
            [
               'kode_kabupaten' => '9433',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Puncak'
            ],
            [
               'kode_kabupaten' => '9434',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Dogiyai'
            ],
            [
               'kode_kabupaten' => '9435',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Intan Jaya'
            ],
            [
               'kode_kabupaten' => '9436',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kab. Deiyai'
            ],
            [
               'kode_kabupaten' => '9471',
               'kode_provinsi' => '94',
               'nama_kabupaten' => 'Kota Jayapura'
            ]
        ]);
    }
}