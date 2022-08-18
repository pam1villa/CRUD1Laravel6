<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    #Mètodo publico que acciona.
    public function InsertPro(Request $proveedor)
    {
        $instanciaproveedor = new App\Proveedor;
        $instanciaproveedor->nombre = $proveedor->nombre;
        $instanciaproveedor->telefono = $proveedor->telefono;
        $instanciaproveedor->direccion = $proveedor->direccion;
        $instanciaproveedor->save();
        return redirect('Proveedor/view')->with('guardado','El proveedor fue guardado con exito!');
        #Propiedad with en laravel (ver apuntes)
    }

    public function ViewPro()
    {
        $objetoretornado = App\Proveedor::All();
        return view('Proveedor/view',compact('objetoretornado'));
    }

    public function DeletePro($id)
    {
        $deleteproveedor = App\Proveedor::FindOrFail($id);
        $deleteproveedor->delete();
        return redirect('Proveedor/view')->with('guardado','El proveedor fue borrado con exito!');        
    }

    public function UpdatePro($id)
    {
        $updateproveedor = App\Proveedor::FindOrFail($id);
        #Lo enviamos a la vista:  
        return view('Proveedor/update',compact('updateproveedor'));
    }

    //Metodo que recibe como oparametro todo mediante la peticio Request y que todo se almacene el la 
    //variable proveedor
    public function UpdateBdPro(Request $proveedor)
    {
        //Creamos una instancia al proveedor para poder acceder a los metodos que tiene y acceder a sus atributos.
        $instanciaproveedor = App\Proveedor::FindOrFail($proveedor->id);
        $instanciaproveedor->nombre = $proveedor->nombre;
        $instanciaproveedor->telefono = $proveedor->telefono;
        $instanciaproveedor->idirecciond = $proveedor->direccion;
        $instanciaproveedor->update();

        return redirect('Proveedor/view')->with('guardado','Registro actualizado con Exito!');        
    }
}
