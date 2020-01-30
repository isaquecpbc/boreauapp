import axios from 'axios';
import React, { Component } from 'react';

class SingleCliente extends Component {
  constructor (props) {
    super(props)

    this.state = {
      cliente: {}
    }
  }

  componentDidMount () {
    const clienteId = this.props.match.params.id

    axios.get(`/api/clientes/${clienteId}`).then(response => {
      this.setState({
        cliente: response.data
      })
    })
  }

  render () {
    const { cliente } = this.state

    return (
      <div className='container py-4'>
        <div className='row justify-content-center'>
          <div className='col-md-8'>
            <div className='card'>
              <div className='card-header'>{cliente.nome}</div>

              <div className='card-body'>
                <p><strong>CPF:&nbsp;</strong><span className="cpf">{cliente.cpf}</span></p>
                <hr />
                <p><strong>Dívida:&nbsp;</strong>R$&nbsp;{cliente.divida}</p>
                <hr />
                <p><strong>Empresa:&nbsp;</strong>{cliente.empresa}</p>
                <hr />
                <p><strong>Endereço:&nbsp;</strong>{cliente.rua},&nbsp;{cliente.logradouro}</p>
                <hr />
                <p><strong>Localidade:&nbsp;</strong>{cliente.cidade}&nbsp;/{cliente.uf}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

export default SingleCliente
