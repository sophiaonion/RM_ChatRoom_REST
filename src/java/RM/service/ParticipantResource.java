/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package RM.service;

/**
 *
 * @author sophiawang
 */

import RM.Participant;
import RM.service.AbstractFacade;
import java.util.List;
import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.ws.rs.Consumes;
 
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.QueryParam;
 
//import com.google.gson.Gson;
@Stateless
@Path("participants")
public class ParticipantResource extends AbstractFacade<Participant> {
    @PersistenceContext(unitName = "REST")
    private EntityManager em;
    
    
    public ParticipantResource() {
        super(Participant.class);
    }
    
    @POST
    @Consumes({"application/json"})
    public int add(Participant entity) {
        super.create(entity);
        em.flush();
        return entity.getId();
    }
    
    
    @GET
    @Path("{id}")
    @Produces("application/json")
    public Participant get(@PathParam("id") Long id)
    {
        return super.find(id);
    }
    
    @GET()
    @Override
    @Path("all")
    @Produces({"application/json"})
    public List<Participant> findAll() {
        return super.findAll();
    }

    @Override
    protected EntityManager getEntityManager() {
        return em;    
    }
   
}
