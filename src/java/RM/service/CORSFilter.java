/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package RM.service;

import java.io.IOException;
import javax.ws.rs.container.ContainerRequestContext;
import javax.ws.rs.container.ContainerResponseContext;
import javax.ws.rs.container.ContainerResponseFilter;
import javax.ws.rs.container.PreMatching;
import javax.ws.rs.ext.Provider;

@Provider
@PreMatching
public class CORSFilter implements ContainerResponseFilter {

@Override
public void filter( ContainerRequestContext requestCtx, ContainerResponseContext responseCtx ) throws IOException {
    responseCtx.getHeaders().add( "Access-Control-Allow-Origin", "*" );
    responseCtx.getHeaders().add( "Access-Control-Allow-Credentials", "true" );
    responseCtx.getHeaders().add( "Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept" );
    responseCtx.getHeaders().add( "Access-Control-Allow-Methods", "GET, POST, DELETE, PUT" );
    }
}