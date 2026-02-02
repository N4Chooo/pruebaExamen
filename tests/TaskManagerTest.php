<?php
use PHPUnit\Framework\TestCase;
use App\TaskManager;
class TaskManagerTest extends TestCase
{
 public function testGenerarTaskAleatorio()
 {
 $task = new TaskManager();
 $resultado = $task->obtenerTareaAleatoria();
 $resultadoTar = $task->contarTareas();
 $resultadoPend = $task->filtrarPorEstado('pendiente');
 $resultadoUrg = $task->hayTareasUrgentes();
 $resultadoId1 = $task->buscarPorId(1);
 $resultadoId9 = $task->buscarPorId(999);

 $this->assertIsArray($resultado);

 $this->assertArrayHasKey('id', $resultado);
 $this->assertArrayHasKey('titulo', $resultado);
 $this->assertArrayHasKey('estado', $resultado);
 $this->assertArrayHasKey('prioridad', $resultado);

 $this->assertEquals(4, $resultadoTar);

 $this->assertCount(2, $resultadoPend);

 $this->assertTrue($resultadoUrg);

 $this->assertIsArray($resultadoId1);

 $this->assertNull($resultadoId9);
 }
}
