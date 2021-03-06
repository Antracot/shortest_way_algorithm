<?php

include('graph.php');
 
// Dijkstra's algorithm is realized in this script 
class PathFinder
{
  protected $graph;
 
  public function __construct($graph) {
    $this->graph = $graph;
  }
   
  public function shortestPath($source, $target) {
	  
	// array for the shortest way to each vertex
    $shortest = array();
	// array for counted vertexes to each vertex
    $counted = array();
	// heap for all non-optimized vertexes	
    $queue = new SplPriorityQueue();
 
    foreach ($this->graph as $vertex => $adj) {
      $shortest[$vertex] = INF; // infinity
      $counted[$vertex] = null; // for all counted vertexes null is assigned
      foreach ($adj as $w => $cost) {
	// vertex and the price of this vertex		  
        $queue->insert($w, $cost);
      }
    }
 
	// for all vertexes from the start 0 is assigned 
     $shortest[$source] = 0;
 
	// body algorithm:
	while (!$queue->isEmpty()) {
	// finding min price
       $neighbor = $queue->extract();
      if (!empty($this->graph[$neighbor])) {  
	// adding neighbor vertexes 	  
        foreach ($this->graph[$neighbor] as $vertex => $cost) {			
		$alt = $shortest[$neighbor] + $cost;
	// finding the shortest way	  
          if ($alt < $shortest[$vertex]) {
            $shortest[$vertex] = $alt; // update minimum length to vertex
            $counted[$vertex] = $neighbor;  // add neighbor vertex
          }
        }
      }
    }
 
	//after finding the shortest way back to the start vertex through heap
    $heap = new SplStack(); // the shortest way like heap
    $neighbor = $target;
    $dist = 0;
    while (isset($counted[$neighbor]) && $counted[$neighbor]) {
      $heap->push($neighbor);
      $dist += $this->graph[$neighbor][$counted[$neighbor]];
      $neighbor = $counted[$neighbor];
    }

	// when heap is empty 	
    if ($heap->isEmpty()) {
      echo "You choose the same countries $source $targetn<br/ >";
    }
    else {
	// push in the heap vertexes like LIFO and show all ways to the start vertex		
      $heap->push($source);
      echo "$dist km: ";
      $sep = '';
      foreach ($heap as $vertex) {
        echo $sep, $vertex;
        $sep = ' -> ';
      }
      echo "<br/ >";
    }
  }
}
$g = new PathFinder($graph);

// show selected result
$g->shortestPath($_POST['select1'], $_POST['select2']);
?>