import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexSaas } from './index-saas';

describe('IndexSaas', () => {
  let component: IndexSaas;
  let fixture: ComponentFixture<IndexSaas>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexSaas]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexSaas);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
