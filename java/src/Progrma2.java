import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
public class Progrma2 {
	public static void main(String[] args) {

	try {
        Class.forName("com.mysql.cj.jdbc.Driver");
        Connection connection = DriverManager.getConnection(
                "jdbc:mysql://localhost:3306/eventos", "root", "");
        Statement statement = connection.createStatement();
        ResultSet resultSet = statement.executeQuery("select * from particular");
        // personas inscritas a cada evento
        int c=0;
        while (resultSet.next()) {
        	
        	resultSet.getString(1);c++; 
            System.out.println(+c+"//"+resultSet.getString(5));
                                
             ;
            }        
       
        connection.close();
    } catch (Exception e) {
        System.out.println(e);
    }

}}

