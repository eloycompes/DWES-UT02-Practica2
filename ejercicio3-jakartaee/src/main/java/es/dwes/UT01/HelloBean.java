package es.dwes.UT01;

import java.io.Serializable;
import java.util.List;
import java.util.Map;

import jakarta.enterprise.context.RequestScoped;
import jakarta.inject.Named;

@Named("helloBean")
@RequestScoped
public class HelloBean implements Serializable {

    private List<Usuario> usuarios;

    public HelloBean() {
        usuarios = List.of(
            new Usuario(
                "Carmen", "Mateo", "12345678A", "carmen.mateo@example.com", 25,
                Map.of(
                    "Enero", 20.0,
                    "Febrero", 20.0,
                    "Marzo", 20.0,
                    "Abril", 0.0  // Pendiente
                )
            ),
            new Usuario(
                "Pedro", "Ramírez", "87654321B", "pedro.ramirez@example.com", 17,
                Map.of(
                    "Enero", 50.0,
                    "Febrero", 0.0,  // Pendiente
                    "Marzo", 50.0,
                    "Abril", 50.0
                )
            )
        );

    }

    public List<Usuario> getUsuarios() {
        return usuarios;
    }
}
