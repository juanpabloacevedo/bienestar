<?php
use App\TipoDocumento;
use App\Rol;
use App\Sede;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objTipoDoc01 =new TipoDocumento();
        $objTipoDoc01->nombre_documento='Cedula de ciudadania';
        $objTipoDoc01->sigla='CC';
        $objTipoDoc01 ->timestamps=false;
        $objTipoDoc01 ->save();

        $objTipoDoc02 =new TipoDocumento();
        $objTipoDoc02->nombre_documento='Tarjeta de identidad';
        $objTipoDoc02->sigla='TI';
        $objTipoDoc02 ->timestamps=false;
        $objTipoDoc02 ->save();

        $objTipoDoc03 =new TipoDocumento();
        $objTipoDoc03->nombre_documento='Tarjeta pasaporte';
        $objTipoDoc03->sigla='TP';
        $objTipoDoc03 ->timestamps=false;
        $objTipoDoc03 ->save();

        $objTipoDoc01 =new TipoDocumento();
        $objTipoDoc01->nombre_documento='Cedula de Identidad';
        $objTipoDoc01->sigla='CI';
        $objTipoDoc01 ->timestamps=false;
        $objTipoDoc01 ->save();

        $objTipoDoc01 =new TipoDocumento();
        $objTipoDoc01->nombre_documento='Registro civil';
        $objTipoDoc01->sigla='RC';
        $objTipoDoc01 ->timestamps=false;
        $objTipoDoc01 ->save();

        $objTipoDoc01 =new TipoDocumento();
        $objTipoDoc01->nombre_documento='Cédula de extranjería';
        $objTipoDoc01->sigla='CE';
        $objTipoDoc01 ->timestamps=false;
        $objTipoDoc01 ->save();

        $objTipoDoc01 =new TipoDocumento();
        $objTipoDoc01->nombre_documento='Documento nacional de identidad';
        $objTipoDoc01->sigla='DNI';
        $objTipoDoc01 ->timestamps=false;
        $objTipoDoc01 ->save();

        $objTipoDoc01 =new TipoDocumento();
        $objTipoDoc01->nombre_documento='documento único de identidad';
        $objTipoDoc01->sigla='DUI';
        $objTipoDoc01 ->timestamps=false;
        $objTipoDoc01 ->save();

        $objrol01 =new Rol();
        $objrol01->name='Administrador';
        $objrol01 ->timestamps=false;
        $objrol01 ->save();

        $objrol02 =new Rol();
        $objrol02->name='Instructor';
        $objrol02 ->timestamps=false;
        $objrol02 ->save();

        $objrol04 =new Rol();
        $objrol04->name='Estudiante';
        $objrol04 ->timestamps=false;
        $objrol04 ->save();

        $objrol05 =new Rol();
        $objrol05->name='Egresado';
        $objrol05 ->timestamps=false;
        $objrol05 ->save();

        $objrol06 =new Rol();
        $objrol06->name='Docente';
        $objrol06 ->timestamps=false;
        $objrol06 ->save();

        $objrol07 =new Rol();
        $objrol07->name='Administrativo';
        $objrol07 ->timestamps=false;
        $objrol07 ->save();

        $objSede01=new Sede();
        $objSede01->name='Campus Avenida Universitaria';
        $objSede01->city='Tunja,Boyacá';
        $objSede01->address='Av. Universitaria Cll. 48 No. 1-235 este';
        $objSede01 ->timestamps=false;
        $objSede01 ->save();

        $objSede02=new Sede();
        $objSede02->name='Campus Centro Histórico';
        $objSede02->city='Tunja,Boyacá';
        $objSede02->address='Cll. 19 Nº 11 - 64';
        $objSede02 ->timestamps=false;
        $objSede02 ->save();

        $objSede03=new Sede();
        $objSede03->name='Campus Bucaramanga';
        $objSede03->city='Bucaramanga, Santander';
        $objSede03->address='Cra. 18 Nº 9 - 27';
        $objSede03 ->timestamps=false;
        $objSede03 ->save();

        $objSede04=new Sede();
        $objSede04->name='Campus Casa Tomasina';
        $objSede04->city='Tunja,Boyacá';
        $objSede04->address='Cra. 9 Nº 21 - 20';
        $objSede04 ->timestamps=false;
        $objSede04 ->save();

        $objSede05=new Sede();
        $objSede05->name='Campus San Alberto Magno';
        $objSede05->city='Bogotá,Cundinamarca';
        $objSede05->address='Autopista Norte calle 205, vía Arrayanes km 1.6';
        $objSede05 ->timestamps=false;
        $objSede05 ->save();

        $objuser01=new User();
        $objuser01->name='supadministrador';
        $objuser01->apellido='Usta Tunja';
        $objuser01->codigo='0001';
        $objuser01->celular='000001';
        $objuser01->usuario='supadmin.ustatunja';
        $objuser01->email='supadmin@example.com';
        $objuser01->id_rol='1';
        $objuser01->id_doc='1';
        $objuser01->password='$2y$10$7QK7St.L9T5ialpAtfKRVOG/bfVwfVqWTPkJtNh1O0j6YnqdYfWWu';
        $objuser01 ->timestamps=false;
        $objuser01 ->save();


    }
}
