<?php
use App\TipoDocumento;
use App\Rol;
use App\Sede;
use App\User;
use App\Periodo;
use App\Estado;
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
        $objperiodo01=new Periodo();
        $objperiodo01->name='2019-1';
        $objperiodo01->inicio='01/02/2019';
        $objperiodo01->fin='01/06/2019';
        $objperiodo01->activo=true;
        $objperiodo01 ->timestamps=false;
        $objperiodo01 ->save();

        $objperiodo02=new Periodo();
        $objperiodo02->name='2019-2';
        $objperiodo02->inicio='01/08/2019';
        $objperiodo02->fin='01/12/2019';
        $objperiodo02->activo=false;
        $objperiodo02 ->timestamps=false;
        $objperiodo02 ->save();

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

        $objTipoDoc04 =new TipoDocumento();
        $objTipoDoc04->nombre_documento='Cedula de Identidad';
        $objTipoDoc04->sigla='CI';
        $objTipoDoc04 ->timestamps=false;
        $objTipoDoc04 ->save();

        $objTipoDoc05 =new TipoDocumento();
        $objTipoDoc05->nombre_documento='Registro civil';
        $objTipoDoc05->sigla='RC';
        $objTipoDoc05 ->timestamps=false;
        $objTipoDoc05 ->save();

        $objTipoDoc06 =new TipoDocumento();
        $objTipoDoc06->nombre_documento='Cédula de extranjería';
        $objTipoDoc06->sigla='CE';
        $objTipoDoc06 ->timestamps=false;
        $objTipoDoc06 ->save();

        $objTipoDoc07 =new TipoDocumento();
        $objTipoDoc07->nombre_documento='Documento nacional de identidad';
        $objTipoDoc07->sigla='DNI';
        $objTipoDoc07 ->timestamps=false;
        $objTipoDoc07 ->save();

        $objTipoDoc08 =new TipoDocumento();
        $objTipoDoc08->nombre_documento='documento único de identidad';
        $objTipoDoc08->sigla='DUI';
        $objTipoDoc08 ->timestamps=false;
        $objTipoDoc08 ->save();

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
        $objSede01->timestamps=false;
        $objSede01->save();

        $objSede02=new Sede();
        $objSede02->name='Campus Centro Histórico';
        $objSede02->city='Tunja,Boyacá';
        $objSede02->address='Cll. 19 Nº 11 - 64';
        $objSede02->timestamps=false;
        $objSede02->save();

        $objSede03=new Sede();
        $objSede03->name='Campus Bucaramanga';
        $objSede03->city='Bucaramanga, Santander';
        $objSede03->address='Cra. 18 Nº 9 - 27';
        $objSede03->timestamps=false;
        $objSede03->save();

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
        $objSede05->timestamps=false;
        $objSede05->save();        
/**Super usuario por defecto*/
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
        $objuser01->timestamps=false;
        $objuser01->save();

        $objuser02=new User();
        $objuser02->name='instructor1';
        $objuser02->apellido='Usta Tunja';
        $objuser02->codigo='0002';
        $objuser02->celular='000002';
        $objuser02->usuario='instructor1.ustatunja';
        $objuser02->email='instructor1@example.com';
        $objuser02->id_rol='2';
        $objuser02->id_doc='1';
        $objuser02->password='$2y$10$7QK7St.L9T5ialpAtfKRVOG/bfVwfVqWTPkJtNh1O0j6YnqdYfWWu';
        $objuser02->timestamps=false;
        $objuser02->save();

        $objuser04=new User();
        $objuser04->name='instructor2';
        $objuser04->apellido='Usta Tunja';
        $objuser04->codigo='0003';
        $objuser04->celular='000003';
        $objuser04->usuario='instructor2.ustatunja';
        $objuser04->email='instructor2@example.com';
        $objuser04->id_rol='2';
        $objuser04->id_doc='1';
        $objuser04->password='$2y$10$7QK7St.L9T5ialpAtfKRVOG/bfVwfVqWTPkJtNh1O0j6YnqdYfWWu';
        $objuser04->timestamps=false;
        $objuser04->save();

        $objuser03=new User();
        $objuser03->name='instructor3';
        $objuser03->apellido='Usta Tunja';
        $objuser03->codigo='0004';
        $objuser03->celular='000004';
        $objuser03->usuario='instructor3.ustatunja';
        $objuser03->email='instructor3@example.com';
        $objuser03->id_rol='2';
        $objuser03->id_doc='1';
        $objuser03->password='$2y$10$7QK7St.L9T5ialpAtfKRVOG/bfVwfVqWTPkJtNh1O0j6YnqdYfWWu';
        $objuser03->timestamps=false;
        $objuser03->save();

        $objuser05=new User();
        $objuser05->name='usuario1';
        $objuser05->apellido='Usta Tunja';
        $objuser05->codigo='0006';
        $objuser05->celular='000006';
        $objuser05->usuario='usuario1.ustatunja';
        $objuser05->email='usuario1@example.com';
        $objuser05->id_rol='3';
        $objuser05->id_doc='1';
        $objuser05->password='$2y$10$7QK7St.L9T5ialpAtfKRVOG/bfVwfVqWTPkJtNh1O0j6YnqdYfWWu';
        $objuser05->timestamps=false;
        $objuser05->save();

        $objuser06=new User();
        $objuser06->name='usuario2';
        $objuser06->apellido='Usta Tunja';
        $objuser06->codigo='0005';
        $objuser06->celular='000005';
        $objuser06->usuario='usuario2.ustatunja';
        $objuser06->email='usuario2@example.com';
        $objuser06->id_rol='3';
        $objuser06->id_doc='1';
        $objuser06->password='$2y$10$7QK7St.L9T5ialpAtfKRVOG/bfVwfVqWTPkJtNh1O0j6YnqdYfWWu';
        $objuser06->timestamps=false;
        $objuser06->save();

         
        $objestado1=new Estado();
        $objestado1->name='aprobado';
        $objestado1->timestamps=true;
        $objestado1->save();

        $objestado2=new Estado();
        $objestado2->name='cancelado';
        $objestado2->timestamps=true;
        $objestado2->save();


    }
}
