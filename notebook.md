## Mapeando entidade com doctrine/orm

Adicionar a _Annotations_ _@Entity_ na definição da classe

Apontar qual será o parâmetro que será o identificador único dela, com a _Annotations_ _@Id_.

Referenciar todos os campos que a tabela terá com a _Annotations_ _@Column_

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

## Doctrine CLI
Com a CLI do doctrine, conseguimos realizar várias tarefas, como executar _queries_, verificar detalhes de sobre entidades mapeadas, etc.

Para visualizar comandos disponíveis, estando na pasta raiz do projeto, basta digitar no terminal:
```
$ php  vendor/bin/doctrine list
```
