import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
public class programa {

	public static void main(String[] args) {
		try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection connection = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/eventos", "root", "");
            Statement statement = connection.createStatement();
            ResultSet resultSet = statement.executeQuery("select * from particular");
            
            // cantidad total de personas inscritas
            int c=0; //Creamos un contador para los particulares que hay inscritos
            while (resultSet.next()) {          	
            	resultSet.getString(1);c++; 
                System.out.println(+c);                                 
                }              
            connection.close();
        } catch (Exception e) {
            System.out.println(e);
        }

	}

}
    