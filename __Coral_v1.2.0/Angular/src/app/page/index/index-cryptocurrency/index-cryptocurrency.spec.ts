import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexCryptocurrency } from './index-cryptocurrency';

describe('IndexCryptocurrency', () => {
  let component: IndexCryptocurrency;
  let fixture: ComponentFixture<IndexCryptocurrency>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexCryptocurrency]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexCryptocurrency);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
