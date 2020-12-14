## Mapeando entidade com doctrine/orm

Adicionar a _docstring_ _@Entity_ na definição da classe

Apontar qual será o parâmetro que será o identificador único dela, com a _docstring_ _@Id_.

Referenciar todos os campos que a tabela terá com a _docstring_ _@Column_

Ex.:
```
<?php

namespace Gubsocosta\Orm\Entity;

/**
 * @Entity
 */
class Student
{
    /**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
    private $id;

    /**
     * @Column (type="string")
     */
    private $name;

    ...
```