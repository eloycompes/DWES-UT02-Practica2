package es.dwes.UT01;
import java.util.Map;

public class Usuario {
        
        private String nombre;
        private String apellidos;
        private String dni;
        private String email;
        private int edad;
        private Map <String, Double> pagos;

        public Usuario (String nombre, String apellidos, String dni, String email, int edad, Map<String, Double> pagos) {
            this.nombre = nombre;
            this.apellidos = apellidos;
            this.dni = dni;
            this.email = email;
            this.edad = edad;
            this.pagos = pagos;
        }
    
        // Getters
        public String getNombre() { return nombre; }
        public String getApellidos() { return apellidos; }
        public String getDni() { return dni; }
        public String getEmail() { return email; }
        public int getEdad() { return edad; }
       
        public double getTotalDeuda(){
            return pagos.values().stream().mapToDouble(v -> v != null ? v : 0).sum();
        }
        
    }