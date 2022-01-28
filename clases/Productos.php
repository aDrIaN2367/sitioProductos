<?php

class Producto{
    private int $id;
    private string $nombre;
    private int $unidades;
    private float $precio;
    private float $IVA = 1.21;

    public function __construct(int $id,string $nombre,int $unidades, float $precio)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->unidades = $unidades;
        $this->precio = $precio;
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }


    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }


    public function getUnidades(): int
    {
        return $this->unidades;
    }


    public function setUnidades(int $unidades): void
    {
        $this->unnidades = $unidades;
    }


    public function getPrecio(): float
    {
        return $this->precio;
    }


    public function setPrecio(float $activo): void
    {
        $this->precio = $activo;
    }
    
    public function getIVA(): float
    {
        return $this->IVA;
    }

}
