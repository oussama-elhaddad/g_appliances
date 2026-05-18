import logo from '../../images/logo.svg';
import React, { useState } from 'react';

export default function Header() {
    const nav = [
        { "gestion": "Appliances", "to": "/appliances" },
        { "gestion": "Clients", "to": "/clients" },
        { "gestion": "Contacts", "to": "/contacts" },
        { "gestion": "POVs", "to": "/povs" },
        { "gestion": "Sceance ", "to": "/sceances" },
        { "gestion": "Suivi ", "to": "/suivis" },
    ];

    return (
        <header>
            <a className='links' href="/appliances">
                <h1 className="logo">logo</h1>
            </a>
            <nav className='nav'>
            <ul>
                {
                    nav.map((li, index) => {
                        return (
                            <li key={index}>
                                <a href={li.to}>{li.gestion}</a>
                            </li>
                        );
                    })
                }
            </ul>
            </nav>
        </header>
    );
}