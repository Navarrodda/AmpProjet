<?php

class Articulo
{
	protected $titulo;
	protected $subtitulo;
	protected $cuerpo;
	protected $autor;
	protected $tags;
    protected $tags2;


	public function __construct($titulo = '', $subtitulo = '', $cuerpo = '', $autor='', $tags ='', $tags2 ='')
	{
		$this->titulo = $titulo;
		$this->subtitulo = $subtitulo;
		$this->cuerpo = $cuerpo;
		$this->autor = $autor;
		$this->tags = $tags;
        $this->tags2 = $tags2;
	}

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     *
     * @return self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    /**
     * @param mixed $subtitulo
     *
     * @return self
     */
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    /**
     * @param mixed $cuerpo
     *
     * @return self
     */
    public function setCuerpo($cuerpo)
    {
        $this->cuerpo = $cuerpo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     *
     * @return self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getTags2()
    {
        return $this->tags2;
    }

    /**
     * @param mixed $tags2
     *
     * @return self
     */
    public function setTags2($tags2)
    {
        $this->tags2 = $tags2;

        return $this;
    }
}