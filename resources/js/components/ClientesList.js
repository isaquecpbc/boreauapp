import axios from 'axios'
import React, { Component } from 'react'
import { Redirect } from 'react-router';
import { Link } from 'react-router-dom'

class ClientesList extends Component {

  constructor (props) {
    super(props)

    this.state = {
      clientes: []
    }
  }

  componentDidMount () {
    axios.get('/api/clientes').then(response => {
      this.setState({
        clientes: response.data
      })
    })
  }

  render () {
    const { clientes } = this.state
    clientes.sort((a,b) => (a.nome > b.nome) ? 1 : ((b.nome > a.nome) ? -1 : 0))

    console.log(clientes)

    return (
       <div className='container py-2 mt-3'>
        <div className='row justify-content-center'>
          <div className='col-md-10'>
            <div className='card'>
              <div className='card-header'>
                <h4 className='list-inline-item'>Todas as dividas dos clientes:</h4>
              </div>

              <div className='card-body'>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Divida</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cidade</th>
                  </tr>
                </thead>
                <tbody>
                  {clientes.map((cliente,index) => (
                    <tr>
                      <th scope="row" className='justify-content-between align-items-center'>{index}</th>
                      <td className='justify-content-between align-items-center'>
                        <Link
                          to={`/cliente/${cliente.id}`}
                          key={index}
                        >
                          {cliente.nome}
                        </Link>
                      </td>
                      <td className='justify-content-between align-items-center'>{cliente.cpf}</td>
                      <td className='justify-content-between align-items-center'>R$&nbsp;{cliente.divida}</td>
                      <td className='justify-content-between align-items-center'>{cliente.empresa}</td>
                      <td className='justify-content-between align-items-center'>{cliente.rua},&nbsp;{cliente.logradouro}</td>
                      <td className='justify-content-between align-items-center'>{cliente.cidade}&nbsp;/{cliente.uf}</td>
                    </tr>
                  ))}
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

export default ClientesList
