/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package RM;

import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author sophiawang
 */
@Entity
@Table(name = "participant")
@XmlRootElement
@NamedQueries({ 
    @NamedQuery(name = "Participants.findAll", query = "SELECT p FROM Participant p")
    })
public class Participant implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private int id;
    @Column(name = "gender")
    private int gender; //1 is male, 0 is female
    @Column(name = "partner")
    private int partner; //1 is Michael, 0 is Michille
    @Column(name = "comments")
    private String comments;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getGender() {
        return gender;
    }

    public void setGender(int g) {
        this.gender = g;
    }
    
    public int getPartner() {
        return partner;
    }

    public void setPartner(int p) {
        this.partner = p;
    }
    
    public String getComment() {
        return comments;
    }

    public void setComment(String s) {
        this.comments = s;
    }
    
//    @Override
//    public int hashCode() {
////        int hash = 0;
////        hash += id.hashCode();
////        return hash;
//    }

    //@Override
//    public boolean equals(Object object) {
////        // TODO: Warning - this method won't work in the case the id fields are not set
////        if (!(object instanceof Participant)) {
////            return false;
////        }
////        Participant other = (Participant) object;
////        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
////            return false;
////        }
////        return true;
//    }

    @Override
    public String toString() {
        return "RM.Gender[ id=" + id + " ]";
    }
    
}
