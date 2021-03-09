import java.util.Queue;

public class GraphTester {
	public static void main(String[] args) {
		String houston = "Houston";
		String Austin = "Austin";
		String banana = "banana";
		
		WeightedGraph<String> graph = new WeightedGraph<>();
		graph.addVertex(banana);
		graph.addVertex(Austin);
		graph.addVertex(houston);
		
		graph.addEdge(Austin, banana, 300);
		graph.addEdge(houston, Austin, 160);
		graph.addEdge(houston, banana, 450);
		
		Queue<String> q = graph.getToVertices(banana);
		System.out.println(q);
	}
}
